simplereviews.grid.Reviews = function(config) {
    config = config || {};
    Ext.applyIf(config, {
        id: 'simplereviews-grid-reviews',
        url: MODx.config.connector_url,
        baseParams: {
            action: 'SimpleReviews\\Processors\\Review\\GetList'
        },
        fields: ['id', 'author', 'content', 'published', 'createdon'],
        autoHeight: true,
        paging: true,
        remoteSort: true,
        columns: [
            {
                header: _('simplereviews.id'),
                dataIndex: 'id',
                sortable: true,
                width: 100
            },
            {
                header: _('simplereviews.author'),
                dataIndex: 'author',
                sortable: true,
                width: 200
            },
            {
                header: _('simplereviews.content'),
                dataIndex: 'content',
                width: 300
            },
            {
                header: _('simplereviews.published'),
                dataIndex: 'published',
                renderer: this.rendYesNo,
                width: 100
            },
            {
                header: _('simplereviews.createdon'),
                dataIndex: 'createdon',
                renderer: Ext.util.Format.dateRenderer(MODx.config.manager_date_format + ' ' + MODx.config.manager_time_format),
                sortable: true,
                width: 100
            }
        ]
    });
    simplereviews.grid.Reviews.superclass.constructor.call(this, config);
};
Ext.extend(simplereviews.grid.Reviews, MODx.grid.Grid, {
    getMenu: function() {
        var m = [];

        if (this.menu.record.published) {
            m.push({
                text: _('simplereviews.unpublish'),
                handler: this.unpublish
            });
        } else {
            m.push({
                text: _('simplereviews.publish'),
                handler: this.publish
            });
        }

        this.addContextMenuItem(m);
    },
    publish: function() {
        MODx.Ajax.request({
            url: MODx.config.connector_url,
            params: {
                action: 'SimpleReviews\\Processors\\Review\\Publish',
                id: this.menu.record.id
            },
            listeners: {
                'success': {fn: this.refresh, scope: this},
                'failure': {fn: function(r){console.log(r);}, scope: this}
            }
        });
    },
    unpublish: function() {
        MODx.Ajax.request({
            url: MODx.config.connector_url,
            params: {
                action: 'SimpleReviews\\Processors\\Review\\Unpublish',
                id: this.menu.record.id
            },
            listeners: {
                'success': {fn: this.refresh, scope: this},
                'failure': {fn: function(r){console.log(r);}, scope: this}
            }
        });
    }
});
Ext.reg('simplereviews-grid-reviews', simplereviews.grid.Reviews);