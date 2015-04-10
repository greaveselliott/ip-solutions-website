(function($){
    var contentBlock = $('git .ubermenu-content-block');
    var targetParent = contentBlock.siblings('.ubermenu-target').append(contentBlock);
    console.log('Content Block: ', contentBlock, '\nTarget Parent: ', targetParent);
})(jQuery);