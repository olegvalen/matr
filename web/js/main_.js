$(document).ready(function () {
    "use strict";

    $(window).resize(function () {
        if (window.matchMedia('(min-width: 768px)').matches) {
            $('.nav-li>.dropdown-menu').removeClass('min-width768');
        } else {
            $('.nav-li>.dropdown-menu').addClass('min-width768');
        }
    });

    $('.nav-li').mouseenter(function () {
        $(this)
            .find('div.dropdown-menu')
            .not('.min-width768')
            .fadeIn(300)
            .css('display', 'block');
    })
        .mouseleave(function () {
            $(this)
                .closest('ul')
                .find('div.dropdown-menu')
                .not('.min-width768')
                .css('display', 'none');
        });

    $('.navigation>.nav-li').hover(
        function () {
            $(this).find('>a').css('background-color', '#CD8250');
        },
        function () {
            $(this).find('>a').css('background-color', '#252525');
        });


    $('.dropdown-toggle').click(function () {
            $('.nav.dropdown-menu').toggle(128);
        }
    );

});

// $(document).mouseup(function (e) {
//     "use strict";
//     var container = $('.dropdown-menu');
// // if the target of the click isn't the container nor a descendant of the container
// //     if (!container.is(e.target) && container.has(e.target).length === 0) {
//     if (!container.is(e.target)) {
//         if (!$('dropdown-toggle').is(e.target)) {
//             container.css('display', 'none');
//         }
//     }
// });
