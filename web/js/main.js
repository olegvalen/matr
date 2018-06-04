$(document).ready(function () {
    "use strict";

    $(window).resize(function () {

        if (window.matchMedia('(min-width: 768px)').matches) {
            $('.nav-li>.dropdown-menu').removeClass('min-width768');
        } else {
            $('.nav-li>.dropdown-menu').addClass('min-width768');
        }

        if (window.matchMedia('(min-width: 992px)').matches) {
            $('.top-menu2').addClass('open');
        } else {
            $('.top-menu2').removeClass('open');
        }

    });

    if (window.matchMedia('(min-width: 768px)').matches) {
        $('.nav-li>.dropdown-menu').removeClass('min-width768');
    } else {
        $('.nav-li>.dropdown-menu').addClass('min-width768');
    }

    if (window.matchMedia('(min-width: 992px)').matches) {
        $('.top-menu2').addClass('open');
    } else {
        $('.top-menu2').removeClass('open');
    }

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
            var self = $(this);
            self.find('ul').css('display', 'inline-flex');
            self.find('.text-center a').css('color', '#CD8250');
            self.css('border', '1px solid #505050');
        },
        function () {
            var self = $(this);
            self.find('ul').css('display', 'none');
            self.find('.text-center a').css('color', '#505050');
            self.css('border', 'none');
        }
    );

    // $('.dropdown-toggle').click(function () {
    //         var self = $(this);
    //         self.find('.dropdown-menu').toggle(128);
    //     }
    // );

    $("select[id^='size-option']").on('change', function () {
        $('#product-price-38950 span').text($('option:selected', this).attr('data-price'));
    });

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