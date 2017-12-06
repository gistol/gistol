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

pimcore.registerNS('coreshop.order.resource');
coreshop.order.resource = Class.create(coreshop.resource, {
    initialize: function () {
        coreshop.global.addStore('coreshop_cart_price_rules', 'coreshop/cart_price_rules');
        pimcore.globalmanager.add('coreshop_order_states', new Ext.data.Store({
            restful: false,
            proxy: {
                type: 'ajax',
                url: '/admin/coreshop/order/get-states'
            },
            reader: {
                type: 'json'
            },
            fields: [
                 'color', 'label', 'name'
            ],
            autoLoad: true
        }));

        coreshop.broker.fireEvent('resource.register', 'coreshop.order', this);
    },

    openResource: function (item) {
        if (item === 'orders') {
            this.openOrders();
        } else if (item === 'quotes') {
            this.openQuotes();
        }else if (item === 'create_order') {
            this.openCreateOrder();
        } else if (item === 'create_quote') {
            this.openCreateQuote();
        } else if (item === 'cart_price_rule') {
            this.openCartPriceRules();
        }
    },

    openOrders: function () {
        try {
            pimcore.globalmanager.get('coreshop_order').activate();
        }
        catch (e) {
            pimcore.globalmanager.add('coreshop_order', new coreshop.order.order.list());
        }
    },

    openCreateOrder: function () {
        new coreshop.order.order.create.panel();
    },

    openQuotes: function () {
        try {
            pimcore.globalmanager.get('coreshop_quote').activate();
        }
        catch (e) {
            pimcore.globalmanager.add('coreshop_quote', new coreshop.order.quote.list());
        }
    },

    openCreateQuote: function () {
        new coreshop.order.quote.create.panel();
    },

    openCartPriceRules: function () {
        try {
            pimcore.globalmanager.get('coreshop_price_rules_panel').activate();
        }
        catch (e) {
            //console.log(e);
            pimcore.globalmanager.add('coreshop_price_rules_panel', new coreshop.cart.pricerules.panel());
        }
    }
});

new coreshop.order.resource();