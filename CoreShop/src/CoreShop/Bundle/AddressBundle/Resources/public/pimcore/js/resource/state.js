Ext.define('CoreShop.store.State', {
    extend: 'CoreShop.resource.ComboBox',
    alias: 'widget.coreshop.state',

    name: 'state',
    fieldLabel: t('coreshop_state'),
    store: pimcore.globalmanager.get('coreshop_states')
});