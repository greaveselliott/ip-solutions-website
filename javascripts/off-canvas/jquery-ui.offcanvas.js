/**
 * Created by elliottgreaves on 02/06/15.
 */
/*!
 * jQuery custom-events plugin boilerplate
 * Author: DevPatch
 * Further changes: @addyosmani
 * Licensed under the MIT license
 */

// In this pattern, we use jQuery's custom events to add
// pub/sub (publish/subscribe) capabilities to widgets.
// Each widget would publish certain events and subscribe
// to others. This approach effectively helps to decouple
// the widgets and enables them to function independently.

;(function ( $, window, document, undefined ) {
    $.widget("eemjii.offCanvas", {
        options: {
            "root"          :   "body",
            "wrapper"       :   ".off-canvas-wrapper",
            "innerWrapper"  :   ".off-canvas-inner",
            "trigger"       :   ".off-canvas-trigger,.off-canvas-trigger-internal",
            "special"       : ['reveal', 'top', 'boring', 'perspective', 'extra-pop']
        },

        _create : function() {
            var self = this;
            var $self = $(self);

            var trigger         = self.options.trigger;
            var $trigger        = $(trigger);

            var root            = self.options.root;
            var $root           = $(root);

            var innerWrapper    = self.options.innerWrapper;
            var $innerWrapper   = $(innerWrapper);

            var transitionClass = $trigger.data('transition');
            var special         = self.options.special;
            var special_classes = special.join(' ');

            //self.element.addClass( "my-widget" );

            //subscribe to 'myEventStart'
            self.element.bind( "offCanvas.open", function( e ) {
                $root.removeClass(special_classes);
                $root.addClass(transitionClass);
            });

            //subscribe to 'myEventEnd'
            self.element.bind( "offCanvas.close", function( e ) {
                $root.removeClass(special_classes);
                $innerWrapper.removeClass(special_classes);
                $innerWrapper.addClass(transitionClass);
            });

            $trigger.on('click', function () {
                console.log($.inArray(transitionClass, special));
                if ($.inArray(transitionClass, special) > -1) {
                    self.element.trigger("offCanvas.open");
                } else {
                    self.element.trigger("offCanvas.close");
                }
                console.log(self.element);
                self.element.toggleClass('off-canvas-active');
                $root.toggleClass('off-canvas-active');
                return false;
            });

            //unsubscribe to 'myEventStart'
            //self.element.unbind( "myEventStart", function(e){
            ///console.log("unsubscribed to this event");
            //});
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