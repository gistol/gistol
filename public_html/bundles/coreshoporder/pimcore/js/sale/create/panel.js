/*
 * CoreShop.
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright  Copyright (c) 2015-2017 Dominik Pfaffenbauer (https://www.pfaffenbauer.at)
 * @license    https://www.coreshop.org/license     GNU General Public License version 3 (GPLv3)
 *
 */

pimcore.registerNS('coreshop.order.sale.create');
pimcore.registerNS('coreshop.order.sale.create.panel');
coreshop.order.sale.create.panel = Class.create({
    steps: {},
    eventManager: null,
    customerId: null,
    customerDetail: null,
    url: null,
    type: null,

    initialize: function () {
        var me = this;

        me.eventManager = new CoreShop.order.sale.create.EventManager();
        me.eventManager.on('validation', function () {
            var valid = true;

            Ext.Object.each(me.steps, function (key, value) {
                if (!value.isValid()) {
                    valid = false;
                    return false;
                }
            });

            if (valid) {
                me.createButton.enable();
            }
            else {
                me.createButton.disable();
            }
        });

        pimcore.helpers.itemselector(
            false,
            function (customer) {
                this.loadCustomerDetail(customer.id);
            }.bind(me),
            {
                type: ['object'],
                subtype: {
                    object: ['object']
                },
                specific: {
                    classes: coreshop.implementations['coreshop.customer']
                }
            }
        );
    },

    loadCustomerDetail: function (customerId) {
        this.customerId = customerId;

        Ext.Ajax.request({
            url: '/admin/coreshop/order-creation/get-customer-details',
            method: 'post',
            params: {
                customerId: customerId
            },
            callback: function (request, success, response) {
                try {
                    response = Ext.decode(response.responseText);

                    if (response.success) {
                        this.customerDetail = response.customer;

                        this.getLayout();
                    } else {
                        Ext.Msg.alert(t('error'), response.message);
                    }
                }
                catch (e) {
                    Ext.Msg.alert(t('error'), e);
                }
            }.bind(this)
        });
    },

    getStep: function (step) {
        return this.steps[step];
    },

    getLayout: function () {
        if (!this.layout) {

            this.layoutId = Ext.id();

            this.createButton = new Ext.button.Button({
                iconCls: 'pimcore_icon_save',
                text: t('create'),
                disabled: true,
                handler: this.createSale.bind(this)
            });

            // create new panel
            this.layout = new Ext.panel.Panel({
                id: this.layoutId,
                title: t('coreshop_' + this.type + '_create'),
                iconCls: 'coreshop_icon_' + this.type + '_create',
                border: false,
                layout: 'border',
                autoScroll: true,
                closable: true,
                items: [this.getPanel()],
                dockedItems: [{
                    xtype: 'toolbar',
                    dock: 'bottom',
                    items: [
                        '->',
                        this.createButton
                    ]
                }]
            });

            // add panel to pimcore panel tabs
            var tabPanel = Ext.getCmp('pimcore_panel_tabs');
            tabPanel.add(this.layout);
            tabPanel.setActiveItem(this.layoutId);

            // update layout
            pimcore.layout.refresh();
        }

        return this.layout;
    },

    getPanel: function () {
        var me = this,
            defaults = {
                style: this.borderStyle,
                cls: 'coreshop-panel',
                bodyPadding: 5
            },
            stepIdentifier = me.getStepIdentifier(),
            stepKeys = Object.keys(stepIdentifier),
            steps = [],
            stepLayouts = [];

        stepKeys.forEach(function (stepName) {
            var step = new stepIdentifier[stepName](me, me.eventManager);

            steps.push(step);
            me.steps[stepName] = step;
        });

        steps = steps.sort(function (stepA, stepB) {
            return stepA.getPriority() > stepB.getPriority();
        });

        stepLayouts = steps.map(function (step) {
            return step.getLayout();
        });

        this.panel = Ext.create('Ext.container.Container', {
            border: false,
            items: stepLayouts,
            padding: 20,
            region: 'center',
            defaults: defaults
        });

        return this.panel;
    },

    getValues: function () {
        var values = {
            customer: this.customerId
        };

        Ext.Object.each(this.steps, function (key, value) {
            values = Ext.apply(values, value.getValues());
        });

        return values;
    },

    createSale: function () {
        this.layout.setLoading(t('coreshop_creating_' + this.type));

        Ext.Ajax.request({
            url: '/admin/coreshop/' + this.type + '-creation/create-sale',
            method: 'post',
            jsonData: this.getValues(),
            callback: function (request, success, response) {
                try {
                    response = Ext.decode(response.responseText);

                    if (response.success) {
                        coreshop.order.helper.openSale(response.id, this.type);
                    } else {
                        Ext.Msg.alert(t('error'), response.message);
                    }
                }
                catch (e) {
                    Ext.Msg.alert(t('error'), e);
                }

                this.layout.setLoading(false);
            }.bind(this)
        });
    },

    getStepIdentifier: function () {
        return coreshop.order.sale.create.step;
    }
});