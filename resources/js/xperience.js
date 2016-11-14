$(document).ready(function() {
    $('#open_menu').on('click', function(e) {
        e.preventDefault();
        $('ul#top_nav_menu').addClass('open');
        $('a#close_menu').addClass('open');
    });
    $('#close_menu').on('click', function(e) {
        e.preventDefault();
        $('ul#top_nav_menu').removeClass('open');
        $('a#close_menu').removeClass('open');
    });

    // var affordablePremium = 0;
    // var affordableAge = 0;
    // var affordableGender = 0;

    // var affordDropdown = $('select.afford-dropdown');

    // affordDropdown.on("change", function() {
    //     var selectID = $(this).attr('id');

    //     if (true) {}
    // });
});

function checkOffset() {
    var rangeSliders = $('#range_sliders');
    if (rangeSliders.length) {
        if (rangeSliders.offset().top + rangeSliders.height() >= $('footer').offset().top - 1) {
            rangeSliders.css('position', 'relative');
        }
        if ($(document).scrollTop() + window.innerHeight < $('footer').offset().top) {
            rangeSliders.css('position', 'fixed').css('width', '100%').css('bottom', '0').css('zIndex', '99'); // restore when you scroll up
        }
    }
}
$(document).scroll(function() {
    checkOffset();
});
