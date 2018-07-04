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

    $('.link-wishlist').on('click', function (e) {
        e.preventDefault();
        var _this = $(this);
        var id = _this.data('id');
        // console.log(id);
        $.ajax({
            url: '/wishlist/add',
            data: {id: id},
            type: 'GET',
            success: function (e) {
                if (!e)
                    alert('Error!');
                // console.log(e);
                _this.find('span').first().addClass('hover');
                $('.ok-badge').first().text(e);
            },
            error: function () {
                alert('Error!');
            }
        });
    });

    $('.btn-remove-id').on('click', function (e) {
        e.preventDefault();
        var _this = $(this);
        var id = _this.data('id');
        $.ajax({
            url: '/wishlist/clear',
            data: {id: id},
            type: 'GET',
            success: function (e) {
                removeItemWishlist(_this, e);
            },
            error: function () {
                alert('Error!');
            }
        });
    });

    $('.btn-cart').on('click', function (e) {
        e.preventDefault();
        var _this = $(this);
        var id = _this.data('id');
        $.ajax({
            url: '/wishlist/cart',
            data: {id: id},
            type: 'GET',
            success: function (e) {
                removeItemWishlist(_this, e);
            },
            error: function () {
                alert('Error!');
            }
        });
    });

    $('.qty-minus,.qty-plus').on('click', function (e) {
        e.preventDefault();
        var _this = $(this);
        var sign = 0;

        var id = _this.data('id');
        var className = _this.attr('class');
        if (className === 'qty-minus') {
            sign = -1;
        }
        else if (className === 'qty-plus') {
            sign = 1;
        } else {
            return;
        }

        var input = _this.closest('.qty-container').find('input');
        var qtyInput = parseInt(input.val());
        if (qtyInput + sign <= 0) {
            return;
        }

        $.ajax({
            url: '/wishlist/minusplus',
            data: {id: id, sign: sign},
            type: 'GET',
            success: function (e) {
                // if (!e)
                //     alert('Error!');

                input.attr('value', qtyInput + sign);


                var wishlistQty = parseInt($('.ok-badge').text());
                wishlistQty += sign;
                if (wishlistQty === 0) {
                    wishlistQty = '';
                }
                $('.ok-badge').text(wishlistQty);

                var cartCell = _this.closest('.cart-cell');
                var price = cartCell.find('.ok-price').text().replace(' ', '');
                price = addSeparators((qtyInput + sign) * parseInt(price), '.', '.', ' ');
                price = price.toString().concat(' грн.');
                cartCell.find('.ok-price-all').text(price);

                refreshQtySum();

            },
            error: function () {
                alert('Error!');
            }
        });
    });

    function removeItemWishlist(_this, e) {
        _this.closest('.first.odd').remove();

        var wishlistQty = parseInt($('.ok-badge').text());
        wishlistQty -= e;
        if (wishlistQty === 0) {
            wishlistQty = '';
        }
        $('.ok-badge').text(wishlistQty);

        refreshQtySum();

        if ($('.cart-cell').length === 0) {
            $('#wishlist-view-form').remove();
        }
    }

    function refreshQtySum() {
        var qty = 0, sum = 0, _qty = 0;
        $('.cart-cell').each(function () {
            _qty = parseInt($(this).find('.input-text.qty').val());
            qty += _qty;
            sum += _qty * parseInt($(this).find('.ok-price').text().replace(' ', ''));
            // console.log(qty);
        });
        $('.wishlist-qty').text(qty + ' шт.');
        $('.wishlist-sum').text(addSeparators(sum, '.', '.', ' '));
    }

    function addSeparators(nStr, inD, outD, sep) {
        nStr += '';
        var dpos = nStr.indexOf(inD);
        var nStrEnd = '';
        if (dpos !== -1) {
            nStrEnd = outD + nStr.substring(dpos + 1, nStr.length);
            nStr = nStr.substring(0, dpos);
        }
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(nStr)) {
            nStr = nStr.replace(rgx, '$1' + sep + '$2');
        }
        return nStr + nStrEnd;
    }

});