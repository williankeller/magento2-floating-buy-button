/**
 * Floating Buy Button.
 * Copyright (C) 2018 Magestat (http://magestat.com)
 *
 * This file included in Magestat/FloatingBuyButton is licensed under OSL 3.0
 *
 * http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * Please see LICENSE.txt for the full text of the OSL 3.0 license
 */
define([
    'jquery',
    'uiComponent'
], function ($, Component) {
    'use strict';

    return Component.extend({
        defaults: {
            toCartForm: '#product_addtocart_form',
            toCartButton: '#product-addtocart-button',
            floatButton: '#floating-buy-button'
        },

        /** @inheritdoc */
        initialize: function () {
            this._super();

            // Render content container to display button.
            this.displayContainer();

            // Show and hide the container when click button.
            this.triggerDisplay();

            // Trigger "Add to cart" button click action.
            this.triggerToCart();

            // Detect when real button change content.
            this.triggerObserver();
        },

        /**
         * Trigger "Add to cart" button click action.
         *
         * @returns {floating-buy-button}
         */
        triggerToCart: function () {
            var self = this;

            // Detect click under the "Add to cart" button.
            $(self.floatButton).on('click', '.trigger-tocart', function (event) {
                // Handler action to trigger by form submit. 
                self.toCartHandler(event);
            });

            return this;
        },

        /**
         * Show and hide the container when click button.
         *
         * @returns {floating-buy-button}
         */
        triggerDisplay: function () {
            var self = this;

            // Detect click action under buy button toggle tab.
            $(self.floatButton).on('click', '.buy-button-toggle', function () {
                $(this).toggleClass('active')
                    .parent()
                    .find('.content-container')
                    .slideToggle(300);
            });

            return this;
        },

        /**
         * Detect when real button change content.
         *
         * @returns {floating-buy-button}
         */
        triggerObserver: function () {
            var self = this;

            // Observer DOM change to "Add to cart" button element.
            $(self.toCartForm).on('DOMSubtreeModified', self.toCartButton, function () {
                var button = $(this).html();

                $(self.floatButton).find('.trigger-tocart').html(button);
            });

            return this;
        },

        /**
         * Handler action to trigger by form submit.
         *
         * @param {Object} event
         * @returns {floating-buy-button}
         */
        toCartHandler: function (event) {
            var self = this;

            // Handler action to trigger by form.
            $(self.toCartForm).trigger('submit');

            // Trigger by button first.
            if (event.isDefaultPrevented()) {
                $(self.toCartButton).trigger();
            }

            return this;
        },

        /**
         * Render content container to display button.
         *
         * @returns {floating-buy-button}
         */
        displayContainer: function () {
            var self = this;

            setTimeout(function () {
                self.stickyDisplayContainer();
            }, 1000);

            return this;
        },

        /**
         * Show and hide the container when necessary to display.
         *
         * @returns {floating-buy-button}
         */
        stickyDisplayContainer: function () {
            var self = this;

            // When window scroll.
            $(window).scroll(function () {

                // Get scroll size.
                var scrollTop = $(window).scrollTop(),
                    container = $('.product-info-main .box-tocart');

                // Check if container exist.
                if (container.length) {
                    var topDistance = container.offset().top;

                    // Calculate to distance.
                    if (topDistance < scrollTop) {
                        $(self.floatButton).addClass('active');
                    }
                    else {
                        $(self.floatButton).removeClass('active');
                    }
                }
                // Update scroll distance.
                scrollTop = topDistance;
            });
            return this;
        }
    });
});
