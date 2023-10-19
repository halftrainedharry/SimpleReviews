var SimpleReviews = function (config) {
    config = config || {};
    SimpleReviews.superclass.constructor.call(this, config);
};
Ext.extend(SimpleReviews, Ext.Component, {

    page: {},
    window: {},
    grid: {},
    tree: {},
    panel: {},
    combo: {},
    field: {},
    config: {},

});
Ext.reg('simplereviews', SimpleReviews);
simplereviews = new SimpleReviews();
