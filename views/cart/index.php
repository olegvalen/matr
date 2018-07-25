<?php
use yii\helpers\Url;

//use Yii;

?>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-main">
            <div class="cart">
                <div class="page-title title-buttons">
                    <h1>Корзина</h1>
                    <?php if ($carts): ?>
                        <ul class="checkout-types">
                            <li>
                                <button type="button" title="Заказать" class="button btn-proceed-checkout btn-checkout">
                                    <span>Заказать</span><span class="glyphicon glyphicon-chevron-right"></span>
                                </button>
                            </li>
                        </ul>
                    <?php endif; ?>
                </div>
                <?php if ($carts): ?>
                    <form id="cart-view-form">
                        <!--                    <input name="form_key" type="hidden" value="jrx4HwfMy8ihzQvq">-->
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
                                                onclick="location.href='http://sites';">
                                            <span><span>Продолжить покупки</span></span>
                                        </button>
                                        <button type="submit" name="update_cart_action" value="empty_cart"
                                                title="Очистить корзину" class="button btn-empty"
                                                id="empty_cart_button">
                                            <span><span>Очистить корзину</span></span></button>
                                    </td>
                                </tr>
                                </tfoot>
                                <tbody>

                                <?php foreach ($carts as $item): ?>
                                    <tr class="first odd tr-row" data-id="<?= $item['cart']->product->product_id ?>"
                                        data-attribute-id="<?= $item['cart']->attribute_id ?>">
                                        <td>
                                            <a href="<?= Url::to("/{$item['cart']->product->seo_url}") ?>"
                                               title="<?= $item['cart']->product->name ?>" class="product-image">
                                                <img class="img-responsive"
                                                     src="<?= "/{$item['cart']->product->getImage()->getPath('300x')}" ?>"
                                                     alt="<?= $item['cart']->product->name ?>">
                                            </a>
                                        </td>
                                        <td>
                                            <h2 class="product-name">
                                                <a href="<?= Url::to("/{$item['cart']->product->seo_url}") ?>"><?= $item['cart']->product->name ?></a><br>
                                                <select name="size_id" class="size-option"
                                                        data-id="<?= $item['cart']->product->product_id ?>">
                                                    <option data-price="0">заполните размер</option>
                                                    <?php foreach ($item['options'] as $option): ?>
                                                        <option data-attribute-id="<?= $option->attribute_id ?>"
                                                                data-price="<?= Yii::$app->formatter->asInteger($option->value) ?>"
                                                            <?= $option->attribute_id == $item['cart']->attribute_id ? ' selected' : '' ?>>
                                                            <?= $option->attributeDescription->name ?>
                                                            (<?= Yii::$app->formatter->asInteger($option->value) ?>
                                                            грн.)
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </h2>
                                        </td>
                                        <td class="a-center wishlist"><span class="th">Wishlist</span>
                                            <a href="#"
                                               class="cart-to-wishlist"
                                               data-id="<?= $item['cart']->product->product_id ?>">Переместить</a>
                                        </td>


                                        <td class="a-right"><span class="th">Цена</span>
                                            <span class="cart-price">
                                                <span class="price price-item<?= $item['cart']->product->product_id ?>"><?= Yii::$app->formatter->asInteger($item['cart']->price) ?></span>
            </span>

                                        </td>
                                        <!-- inclusive price starts here -->
                                        <td class="a-center"><span class="th">Qty</span>
                                            <div class="qty-container">
                                                <span class="qty-minus-cart">-</span><input type="text"
                                                                                            value="<?= $item['cart']->qty ?>"
                                                                                            maxlength="12"
                                                                                            title="Количество"
                                                                                            class="input-text qty"
                                                                                            disabled><span
                                                        class="qty-plus-cart">+</span>
                                            </div>
                                        </td>

                                        <!--Sub total starts here -->
                                        <td class="a-right"><span class="th">Сумма</span>
                                            <span class="cart-price">

                                                <span class="price sum"><?= Yii::$app->formatter->asInteger($item['cart']->price * $item['cart']->qty) ?></span>
        </span>
                                        </td>
                                        <td class="a-center last">
                                            <a href="<?= Url::to(['cart/clear', 'id' => $item['cart']->product->product_id]) ?>"
                                               title="Удалить" class="btn-remove btn-remove2 btn-remove-cart"
                                               data-id="<?= $item['cart']->product->product_id ?>">
                                                <span class="glyphicon glyphicon-remove"></span>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                                <tr class="first odd">
                                    <td colspan="5"><span class="center"><strong>Количество:</strong></span></td>
                                    <td><span class="center cart-qty"><strong><?= $cartQty ?></strong></span></td>
                                    <td></td>
                                </tr>
                                <tr class="first odd">
                                    <td colspan="5"><span class="center"><strong>Сумма:</strong></span></td>
                                    <td>
                                        <span class="center cart-sum"><strong><?= Yii::$app->formatter->asInteger($cartSum) ?></strong></span>
                                    </td>
                                    <td></td>
                                </tr>


                                </tbody>
                            </table>
                        </fieldset>
                    </form>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>
