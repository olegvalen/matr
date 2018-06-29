<?php
use yii\helpers\Url;

?>
<div class="container">
    <div class="row">
        <div class="col-main">
            <div class="my-wishlist">
                <div class="page-title title-buttons">
                    <h1>Избранное</h1>
                </div>
                <?php if ($wishlist): ?>
                    <form id="wishlist-view-form"
                          action="https://www.organize.com/wishlist/index/update/wishlist_id/120/">
                        <fieldset>
                            <!--                            <input name="form_key" type="hidden" value="rHxVbGxSGh04LIqi">-->
                            <table class="col-md-12 data-table" id="wishlist-table">
                                <thead>
                                <tr class="first last">
                                    <th></th>
                                    <th>Товары</th>
                                    <th>Количество</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php foreach ($wishlist as $item): ?>
                                    <tr id="item_1210" class="first odd">
                                        <td><a class="product-image"
                                               href="<?= Url::to("/{$item['product']->seo_url}") ?>"
                                               title="<?= $item['product']->name ?>">
                                                <img src="<?= "/{$item['product']->getImage()->getPath('113x')}" ?>"
                                                     alt="<?= $item['product']->name ?>">
                                            </a>
                                        </td>
                                        <td><h3 class="product-name"><a
                                                        href="<?= Url::to("/{$item['product']->seo_url}") ?>"
                                                        title="<?= $item['product']->name ?>"><?= $item['product']->name ?></a>
                                            </h3>
                                        </td>
                                        <td>
                                            <div class="cart-cell">
                                                <div class="price-box">
                                                                <span class="regular-price" id="product-price-15787">
                                            <span class="price"><?= Yii::$app->formatter->asInteger($item['product']->price) ?>
                                                грн.</span></span>
                                                </div>
                                                <div class="add-to-cart-alt">
                                                    <div class="qty-container">
                                                        <span class="qty-minus">-</span><input type="text"
                                                                                               class="input-text qty validate-not-negative-number"
                                                                                               name="qty[1210]"
                                                                                               value="<?= $item['qty'] ?>"><span
                                                                class="qty-plus">+</span>
                                                    </div>
                                                </div>
                                                <div class="price-box">
                                                                <span class="regular-price" id="product-price-15787">
                                            <span class="price"><?= Yii::$app->formatter->asInteger($item['product']->price * $item['qty']) ?>
                                                грн.</span></span>
                                                </div>
                                                <br>
                                                <button type="button" title="Add to Cart"
                                                        onclick="addToCart(<?= $item['product']->product_id ?>);"
                                                        class="button btn-cart">
                                                    <span><span>В корзину</span></span>
                                                </button>
                                            </div>
                                        </td>
                                        <td class="last">
                                            <a href="#"
                                               onclick="return clearFromWishlist(<?= $item['product']->product_id ?>);"
                                               title="Удалить" class="btn-remove"><span
                                                        class="glyphicon glyphicon-remove"></span></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                                </tbody>
                            </table>
                            <div class="buttons-set buttons-set2">
                                <button type="button" title="Добавить все в корзину" onclick="addAllToCart()"
                                        class="button btn-add"><span><span>Добавить все в корзину</span></span></button>
                                <button type="submit" name="do" title="Обновить" class="button btn-update">
                                    <span><span>Обновить</span></span></button>
                            </div>
                        </fieldset>
                    </form>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>
