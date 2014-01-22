(function($) {
    $.fn.equalHeights = function() {

        var height = 0;
        var heights = [];

        this.each(function() {
            height = $(this).height();
            heights.push(height);
        });

        var tallest = Math.max.apply(Math, heights);
        this.each(function() {
            $(this).height(tallest);
        });
    };

})(jQuery);
