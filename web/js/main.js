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

    $('.item-grid>ul>li').hover(
        function () {
            $(this).find('ul').css('display', 'inline-flex');
            $(this).find('.text-center a').css('color', '#CD8250');
        },
        function () {
            $(this).find('ul').css('display', 'none');
            $(this).find('.text-center a').css('color', '#505050');
        }
    );

    $('.dropdown-toggle').click(function () {
            $('.nav.dropdown-menu').toggle(128);
        }
    );

    /******************************
     BOTTOM SCROLL TOP BUTTON
     ******************************/

    var scrollTop = $(".scroll-top");
    $(window).scroll(function () {
        var topPos = $(this).scrollTop();
        // if user scrolls down - show scroll to top button
        if (topPos > 100) {
            $(scrollTop).css("opacity", "1");
        } else {
            $(scrollTop).css("opacity", "0");
        }
    });

    $(scrollTop).click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
});
// 1