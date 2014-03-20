(function ($) {
    $(document).foundation();

    var $vAlign_padding = 0;
    var $vAlign_obj = $('.js-valign');

    var $vAlign = function () {
        $vAlign_padding = ($(window).height() - $vAlign_obj.height() - 75) / 2;
        if ($vAlign_padding < 100) $vAlign_padding = 100;
        $vAlign_obj.css('padding', $vAlign_padding + 'px 0');
    }
    $vAlign();

    $(window).on('resize', Foundation.utils.throttle(function(e) {
        $vAlign();
    }, 300));

})(jQuery);