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
            "root"                  :   "body",
            "wrapper"               :   ".off-canvas-wrapper",
            "innerWrapper"          :   ".off-canvas-inner",
            "trigger"               :   ".off-canvas-trigger-inner",
            "triggerInternal"       :   ".off-canvas-trigger-internal",
            "tab"                   :   ".off-canvas-tab",
            "special"               :   ['reveal', 'top', 'boring', 'perspective', 'extra-pop']
        },

        _create : function() {
            var self = this;
            var $self = $(self);

            var trigger         = self.options.trigger;
            var $trigger        = $(trigger);

            var triggerInternal  = self.options.triggerInternal;
            var $triggerInternal = $(triggerInternal);

            var root            = self.options.root;
            var $root           = $(root);

            var innerWrapper    = self.options.innerWrapper;
            var $innerWrapper   = $(innerWrapper);

            var tab             = self.options.tab;
            var $tab            = $(tab);

            var transitionClass = $trigger.data('transition');
            var special         = self.options.special;
            var special_classes = special.join(' ');

            var is_open         = false;
            var current_tab     = null;
            var active_tab      = null;

            //self.element.addClass( "my-widget" );

            //subscribe to 'myEventStart'
            self.element.bind( "offCanvas.open", function( e, injection_this, injection_current_tab ) {
                $root.removeClass(special_classes);
                $root.addClass(transitionClass);
                $root.addClass('off-canvas-active');
                $trigger.removeClass('off-canvas-trigger-active');
                $(injection_this).addClass('off-canvas-trigger-active');
                $tab.removeClass('off-canvas-tab-active');
                $((tab+'-'+injection_current_tab)).addClass('off-canvas-tab-active');
                is_open = true;
                active_tab = injection_current_tab;
            });

            //subscribe to 'myEventEnd'
            self.element.bind( "offCanvas.close", function( e, injection_this ) {
                $root.removeClass(special_classes);
                $innerWrapper.removeClass(special_classes);
                $innerWrapper.addClass(transitionClass);
                $root.removeClass('off-canvas-active');
                if (injection_this) {
                    $(injection_this).removeClass('off-canvas-trigger-active');
                }
                is_open = false;
                active_tab = null;
            });

            $trigger.on('click', function () {
                current_tab = $(this).data('off-canvas-tab');

                if (is_open && current_tab == active_tab) {
                    self.element.trigger("offCanvas.close",[this]);
                } else {
                    self.element.trigger("offCanvas.open",[this, current_tab]);
                }
                console.log('current tab = ', current_tab);
                console.log('active tab = ', active_tab);
                console.log('Is open = ', is_open);
                return false;
            });

            $triggerInternal.on('click', function() {
                self.element.trigger("offCanvas.close");
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