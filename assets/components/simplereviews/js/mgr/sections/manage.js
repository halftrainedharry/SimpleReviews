simplereviews.page.Manage = function (config) {
    config = config || {};
    Ext.applyIf(config, {
        components: [
            {
                xtype: 'simplereviews-panel-manage',
                renderTo: 'simplereviews-panel-manage-div'
            }
        ]
    });
    simplereviews.page.Manage.superclass.constructor.call(this, config);
};
Ext.extend(simplereviews.page.Manage, MODx.Component);
Ext.reg('simplereviews-page-manage', simplereviews.page.Manage);
