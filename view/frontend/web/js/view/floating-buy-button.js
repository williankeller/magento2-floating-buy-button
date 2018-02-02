/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
define([
    'ko',
    'jquery',
    'underscore',
    'uiComponent'
], function (ko, $, _, Component) {
    'use strict';

    return Component.extend({
        defaults: {
            toCartForm: '#product_addtocart_form',
            toCartButton: '#product-addtocart-button'
        },

        /** @inheritdoc */
        initialize: function () {
            this._super();
        },

        /**
         * Set data from customerData.
         *
         * @param {Object} data
         */
        triggerToCart: function () {
            var self = this;

            if (event) {
                event.preventDefault();
            }

            self.formHandler();

            return this;
        },

        formHandler: function () {
            var self = this,
                event = $.Event('submit');

            $(self.toCartForm).trigger(event);

            if (event.isDefaultPrevented()) {
                self.buttonHandler();
            }

            return this;
        },

        buttonHandler: function () {
            var self = this;

            $(self.toCartButton).trigger();

            return this;
        }
    });
});
