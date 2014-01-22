(function ($) {
    Drupal.behaviors.welad =  {
        attach: function(context, settings) {
            $('li.photo-wrapper div.row').imagesLoaded(function($images){
                $('li.photo-wrapper div.row').equalHeights();
            });
        }

    };
})(jQuery);