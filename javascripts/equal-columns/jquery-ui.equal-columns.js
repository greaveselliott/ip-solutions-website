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
    $.widget("eemjii.equalColumns", {
        options: {
            "root"                  :   "body"
        },

        _create : function() {
            var self = this;
            var $self = $(self);

            var root            = self.options.root;
            var $root           = $(root);

            var $rows             = $('.row.equal-columns-row');

            //subscribe to 'myEventStart'
            self.element.bind( "equalColumns.init", function( e ) {
                $rows.each(function (index) {
                    var columnHeight = 0;
                    var $self = $(this);
                    var $columns = $self.children('.equal-columns-column');
                    $columns.each(function(indexInner){
                       var height =  $columns.eq(indexInner).height();
                       columnHeight = columnHeight < height ? height : columnHeight;
                    });
                    $columns.css({"height": columnHeight});
                });
            });

            self.element.trigger('equalColumns.init');
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