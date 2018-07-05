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
                    <fieldset>
                        <table class="col-md-12 data-table" id="wishlist-table">
                            <thead>
                            <tr class="first last">
                                <th></th>
                                <th>Товары</th>
                                <th></th>
                                <th style="width: 100px"></th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php foreach ($wishlist as $item): ?>
                                <tr class="first odd">
                                    <td><a class="product-image"
                                           href="<?= Url::to("/{$item['product']->seo_url}") ?>"
                                           title="<?= $item['name'] ?>">
                                            <img src="<?= "/{$item['product']->getImage()->getPath('113x')}" ?>"
                                                 alt="<?= $item['name'] ?>">
                                        </a>
                                    </td>
                                    <td><h3 class="product-name"><a
                                                    href="<?= Url::to("/{$item['product']->seo_url}") ?>"
                                                    title="<?= $item['name'] ?>"><?= $item['name'] ?></a>
                                        </h3>
                                    </td>
                                    <td>
                                        <div class="cart-cell">
<!--                                            <div class="price-box">
                                                                <span class="regular-price">
                                            <span class="price ok-price"><?/*= Yii::$app->formatter->asInteger($item['price']) */?>
                                                грн.</span></span>
                                            </div>
                                            <div class="add-to-cart-alt">
                                                <div class="qty-container">
                                                    <span class="qty-minus"
                                                          data-id="<?/*= $item['product']->product_id */?>">-</span><input
                                                            type="text" class="input-text qty"
                                                            value="<?/*= $item['qty'] */?>" disabled><span class="qty-plus"
                                                                                                       data-id="<?/*= $item['product']->product_id */?>">+</span>
                                                </div>
                                            </div>
                                            <div class="price-box">
                                                                <span class="regular-price">
                                            <span class="price ok-price-all"><?/*= Yii::$app->formatter->asInteger($item['price'] * $item['qty']) */?>
                                                грн.</span></span>
                                            </div>
                                            <br>
-->                                            <button type="button" title="В корзину" class="button btn-cart"
                                                    data-id="<?= $item['product']->product_id ?>">
                                                <span><span>В корзину</span></span>
                                            </button>
                                        </div>
                                    </td>
                                    <td class="last">
                                        <a href="<?= Url::to(['wishlist/clear', 'id' => $item['product']->product_id]) ?>"
                                           title="Удалить" class="btn-remove btn-remove-id"
                                           data-id="<?= $item['product']->product_id ?>"><span
                                                    class="glyphicon glyphicon-remove"></span></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
<!--                            <tr class="first odd">
                                <td></td>
                                <td><h3 class="center">Количество:</h3></td>
                                <td></td>
                                <td><h3 class="center wishlist-qty"><?/*= $wishlistQty */?> шт.</h3</td>
                            </tr>
                            <tr class="first odd">
                                <td></td>
                                <td><h3 class="center">Сумма:</h3></td>
                                <td></td>
                                <td>
                                    <h3 class="center wishlist-sum"><?/*= Yii::$app->formatter->asInteger($wishlistSum) */?></h3>
                                </td>
                            </tr>
-->                            </tbody>
                        </table>
                        <div class="buttons-set buttons-set2">
                            <button type="button" title="Добавить все в корзину"
                                    class="button btn-cart-all"><span><span>Добавить все в корзину</span></span></button>
                        </div>
                    </fieldset>
                    </form>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>
