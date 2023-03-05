/*global define*/
define(
    [
        'Magento_Checkout/js/model/quote'
    ], function (quote) {
        'use strict';

        var mixin = {
            isVisible: function() {
                var isVisible = this._super();
                if(quote.shippingMethod() && quote.shippingMethod().method_code == 'click_and_collect') {
                    jQuery('.click_and_collect').show();
                    isVisible = false;
                } else  {
                    jQuery('.click_and_collect').hide();
                }

                return isVisible;
            }
        }
        return function (target) {
            return target.extend(mixin);
        }
    }
);