<?php

?>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-main">
            <div class="cart">
                <div class="page-title title-buttons">
                    <h1>Корзина</h1>
                    <ul class="checkout-types">
                        <li>
                            <button type="button" title="Заказать" class="button btn-proceed-checkout btn-checkout"
                                    onclick="window.location='https://www.organize.com/checkout/onepage/';">
                                <span>Заказать</span><span class="glyphicon glyphicon-chevron-right"></span>
                            </button>
                        </li>
                    </ul>
                </div>

                <form action="https://www.organize.com/checkout/cart/updatePost/" method="post">
                    <input name="form_key" type="hidden" value="jrx4HwfMy8ihzQvq">
                    <fieldset>
                        <table id="shopping-cart-table" class="data-table cart-table">
                            <colgroup>
                                <col width="1">
                                <col>
                                <col width="1">
                                <col width="1">
                                <col width="1">
                                <col width="1">
                                <col width="1">
                            </colgroup>
                            <thead>
                            <tr class="first last">
                                <th rowspan="1">&nbsp;</th>
                                <th rowspan="1"><span class="nobr">Наименование</span></th>
                                <th rowspan="1" class="a-center"><span class="nobr">Избранное</span></th>
                                <th class="a-center" colspan="1"><span class="nobr">Цена</span></th>
                                <th rowspan="1" class="a-center">Количество</th>
                                <th class="a-center" colspan="1">Сумма</th>
                                <th rowspan="1" class="a-center">&nbsp;</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr class="first last">
                                <td colspan="50" class="a-right last">
                                    <button type="button" title="Продолжить покупки" class="button btn-continue"
                                            onclick="setLocation('https://www.organize.com/')"><span><span>Продолжить покупки</span></span>
                                    </button>
                                    <button type="submit" name="update_cart_action" value="update_qty"
                                            title="Обновить корзину" class="button btn-update"><span><span>Обновить корзину</span></span>
                                    </button>
                                    <button type="submit" name="update_cart_action" value="empty_cart"
                                            title="Очистить корзину" class="button btn-empty" id="empty_cart_button">
                                        <span><span>Очистить корзину</span></span></button>
                                    <!--[if lt IE 8]>
                                    <input type="hidden" id="update_cart_action_container"/>
                                    <![endif]-->
                                </td>
                            </tr>
                            </tfoot>
                            <tbody>
                            <tr class="first odd">
                                <td>
                                    <a href="https://www.organize.com/9-compartment-acrylic-cosmetic-organizer.html"
                                       title="9 Compartment Acrylic Cosmetic Organizer" class="product-image">
                                        <img class="img-responsive"
                                             src="https://www.organize.com/media/catalog/product/cache/1/thumbnail/300x/9df78eab33525d08d6e5fb8d27136e95/9/8/987860_1.jpg"
                                             alt="9 Compartment Acrylic Cosmetic Organizer">
                                    </a>
                                </td>
                                <td>
                                    <h2 class="product-name">
                                        <a href="https://www.organize.com/9-compartment-acrylic-cosmetic-organizer.html">9
                                            Compartment Acrylic Cosmetic Organizer</a>
                                    </h2>
                                </td>
                                <td class="a-center wishlist"><span class="th">Wishlist</span>
                                    <a href="https://www.organize.com/wishlist/index/fromcart/item/88021/"
                                       class="link-wishlist use-ajax">Переместить</a>
                                </td>


                                <td class="a-right"><span class="th">Unit Price</span>
                                    <span class="cart-price">
                                                <span class="price">$18.61</span>
            </span>

                                </td>
                                <!-- inclusive price starts here -->
                                <td class="a-center"><span class="th">Qty</span>
                                    <div class="qty-container">
                                        <span class="qty-minus">-</span><input type="text" name="cart[88021][qty]"
                                                                               value="1" maxlength="12" title="Qty"
                                                                               class="input-text qty"><span
                                                class="qty-plus">+</span>
                                    </div>
                                </td>

                                <!--Sub total starts here -->
                                <td class="a-right"><span class="th">Subtotal</span>
                                    <span class="cart-price">

                                                <span class="price">$18.61</span>
        </span>
                                </td>
                                <td class="a-center last">
                                    <a href="https://www.organize.com/checkout/cart/delete/id/88021/form_key/jrx4HwfMy8ihzQvq/uenc/aHR0cHM6Ly93d3cub3JnYW5pemUuY29tL2NoZWNrb3V0L2NhcnQv/"
                                       title="Remove item" class="btn-remove btn-remove2">
                                        <span class="glyphicon glyphicon-remove"></span>
                                    </a>
                                </td>
                            </tr>
                            <tr class="last even">
                                <td>
                                    <a href="https://www.organize.com/stackable-acrylic-containers-set-of-3.html"
                                       title="Stackable Acrylic Containers - Set of 3" class="product-image">
                                        <img class="img-responsive"
                                             src="https://www.organize.com/media/catalog/product/cache/1/thumbnail/300x/9df78eab33525d08d6e5fb8d27136e95/9/8/987840_1.jpg"
                                             alt="Stackable Acrylic Containers - Set of 3">
                                    </a>
                                </td>
                                <td>
                                    <h2 class="product-name">
                                        <a href="https://www.organize.com/stackable-acrylic-containers-set-of-3.html">Stackable
                                            Acrylic Containers - Set of 3</a>
                                    </h2>
                                </td>
                                <td class="a-center wishlist"><span class="th">Wishlist</span>
                                    <a href="https://www.organize.com/wishlist/index/fromcart/item/88022/"
                                       class="link-wishlist use-ajax">Переместить</a>
                                </td>


                                <td class="a-right"><span class="th">Unit Price</span>
                                    <span class="cart-price">
                                                <span class="price">$13.15</span>
            </span>

                                </td>
                                <!-- inclusive price starts here -->
                                <td class="a-center"><span class="th">Qty</span>
                                    <div class="qty-container">
                                        <span class="qty-minus">-</span><input type="text" name="cart[88022][qty]"
                                                                               value="1" maxlength="12" title="Qty"
                                                                               class="input-text qty"><span
                                                class="qty-plus">+</span>
                                    </div>
                                </td>

                                <!--Sub total starts here -->
                                <td class="a-right"><span class="th">Subtotal</span>
                                    <span class="cart-price">

                                                <span class="price">$13.15</span>
        </span>
                                </td>
                                <td class="a-center last">
                                    <a href="https://www.organize.com/checkout/cart/delete/id/88022/form_key/jrx4HwfMy8ihzQvq/uenc/aHR0cHM6Ly93d3cub3JnYW5pemUuY29tL2NoZWNrb3V0L2NhcnQv/"
                                       title="Remove item" class="btn-remove btn-remove2">
                                        <span class="glyphicon glyphicon-remove"></span>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </fieldset>
                </form>

            </div>
        </div>
    </div>
</div>
