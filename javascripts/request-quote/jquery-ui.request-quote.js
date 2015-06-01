/*!
 * Simply script that opens and closes the "request quote" box
 * Author: Elliott Greaves
 * Further changes: @greaveselliott
 * Licensed under the MIT license
 */

// In this pattern, we use jQuery's custom events to add
// pub/sub (publish/subscribe) capabilities to widgets.
// Each widget would publish certain events and subscribe
// to others. This approach effectively helps to decouple
// the widgets and enables them to function independently.

;(function ( $, window, document, undefined ) {
    $.widget("eemjii.requestQuote", {
        options: {
            'trigger'   :   '.request-quote-trigger',
            'content'   :   '.request-quote-content',
            'activeClass'  :   'request-quote-active'
        },

        _create : function() {
            var self = this;
            var $self   = $(self.element);

            //subscribe to 'openSlide'
            self.element.bind( "requestQuote.open", function( e ) {
                console.log('Open');
                $self.addClass(self.options.activeClass);
            });

            //subscribe to 'closeSlide'
            self.element.bind( "requestQuote.close", function( e ) {
                $self.removeClass(self.options.activeClass);
                console.log('close');
            });

            self.trigger();
        },

        trigger: function () {

            var self        = this;
            var $self       = $(self.element);
            var trigger     = $(self.options.trigger);

            trigger.on('click', function() {
                if ($self.hasClass(self.options.activeClass)) {
                    self.element.trigger('requestQuote.close');
                } else {
                    self.element.trigger('requestQuote.open');
                }
            });
        },

        destroy: function(){
            $.Widget.prototype.destroy.apply( this, arguments );
        }
    });
})( jQuery, window , document );

//Publishing event notifications
//usage:
// $(".my-widget").trigger("myEventStart");
// $(".my-widget").trigger("myEventEnd");