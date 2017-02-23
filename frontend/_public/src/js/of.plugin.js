;(function($, window) {
    "use strict";

    $.plugin('ofPluginDummy', {

        /**
         * Default settings for the plugin
         * @type {Object}
         */
        defaults: {
            /** @type {String} eventType - The event type which should be used to run code */
            eventType: 'keyup'
        },

        /**
         * Initializes the plugin and sets up the necessary event listeners.
         */
        init: function () {
            var me = this,
                selector = $(me.$el.attr('data-selector')),
                val;
            me.applyDataAttributes();

            if(!selector.length) {
                throw new Error('Given selector does not match any element on the page.');
            }
            me._on(me.$el, me.opts.eventType, function() {

                /**
                 * Example content
                 * */
                val = me.$el.val();
                selector.val(val.length ? val : '');
            });
        }
    });

})(jQuery, window);
