jQuery(document).ready(function($) {
    // tool tip
    $('[data-toggle="tooltip"]').tooltip();

    // video frame
    $('.video-iframe').css('height', parseInt($(this).width() * 9/16));
    $(window).resize(function() {
        $('.video-iframe').css('height', parseInt($(this).width() * 9/16));
    });

    // course categories menu
    $('#course-categories-nav-toggle').click(function() {
        $('#course-categories-menu').stop().slideToggle(300);
    });

    $(document).mouseup(function(e)
    {
        var container = $('#course-categories-menu');
        if (container.css('display') == 'block') {
            var toggle_btn = $('#course-categories-nav-toggle');
            if (toggle_btn.is(e.target) || toggle_btn.has(e.target).length) return;
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                container.stop().slideUp(300);
            }
            return;
        }

        var container = $('#cart-dropdown');
        if (container.css('display') == 'block') {
            var toggle_btn = $('#cart-toggle');
            if (toggle_btn.is(e.target) || toggle_btn.has(e.target).length) return;
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                container.hide();
            }
        }
    });

    $('#toggle-continue-video').click(function() {
        $(this).toggleClass('off');
    });

    // cart click
    $('#cart-toggle').click(function() {
        $('#cart-dropdown').toggle();
    });
});