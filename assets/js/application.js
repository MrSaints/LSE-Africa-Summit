(function ($) {
    $(document).foundation();

    var $window = $(window);
    var $vAlign_padding = 0;
    var $vAlign_obj = $('.js-valign');

    var $vAlign = function () {
        $vAlign_padding = ($window.height() - $vAlign_obj.height() - 75) / 2;
        if ($vAlign_padding <= 100) $vAlign_padding = 100;
        $vAlign_obj.css('padding', $vAlign_padding + 'px 0');
    }
    $vAlign();

    $window.on('resize', Foundation.utils.throttle($vAlign, 300));

    $.getJSON("http://twitcher.steer.me/user_timeline/LSEAfricaSummit?key=kc2tcvkc", function (data) {
        $tweets = '';
        for (var i = data.length - 1; i >= 0; i--) {
            $tweets += '<li><h6 class="twitter-posted">' + moment(data[i].created_at).fromNow() + '</h6>';
            $tweets += '<h4 class="twitter-tweet">' + data[i].text + '</h4></li>';
        };
        $('#js-twitter').html($tweets).Morphist({
            animateIn: "fadeInLeft",
            animateOut: "fadeOutRight",
            speed: 3500
        });
    });
})(jQuery);