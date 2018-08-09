<?php
use yii\helpers\Url;
use yii\helpers\Html;

?>

<section class="section">
    <div class="container">
        <h1 class="title">Корзина</h1>
        <?php if ($carts): ?>
            <div style="overflow-x: auto;">
                <table class="table is-striped is-hoverable is-fullwidth">
                    <thead>
                    <tr>
                        <th>Товар</th>
                        <th>Наименование</th>
                        <th>Избранное</span></th>
                        <th>Цена<span class="has-text-white">a</span></th>
                        <th>Количество</th>
                        <th>Сумма</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($carts as $item): ?>
                        <tr class="ok-row" data-id="<?= $item['cart']->product->product_id ?>"
                            data-attribute-id="<?= $item['cart']->attribute_id ?>">
                            <td class="has-text-centered">
                                <a href="<?= Url::to("/{$item['cart']->product->seo_url}") ?>"
                                   title="<?= $item['cart']->product->name ?>">
                                    <figure class="image">
                                        <?php echo Html::img("/{$item['cart']->product->getImage()->getPath('300x')}", ['alt' => $item['cart']->product->name]) ?>
                                    </figure>
                                </a>
                            </td>
                            <td>
                                <a href="<?= Url::to("/{$item['cart']->product->seo_url}") ?>"><?= $item['cart']->product->name ?></a></br>
                                <div class="field">
                                    <div class="control">
                                        <div class="select">
                                            <select class="size-option"
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
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="has-text-centered">
                                <a class="button ok-cart-to-wishlist is-primary is-small" title="В избранное"
                                   data-id="<?= $item['cart']->product->product_id ?>">В избранное</a>
                            </td>
                            <td class="has-text-centered">
                                <span class="price-item<?= $item['cart']->product->product_id ?>"><?= Yii::$app->formatter->asInteger($item['cart']->price) ?></span>
                            </td>
                            <td>
                                <div class="field has-addons">
                                    <p class="control">
                                        <a class="button ok-cart-minus is-primary is-small">
                                            <span class="icon">
                                                <i class="fas fa-minus"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <input type="text" value="<?= $item['cart']->qty ?>" maxlength="12"
                                               title="Количество"
                                               class="input ok-cart-input-qty is-small has-text-centered"
                                               style="width: 3em;" disabled>
                                    </p>
                                    <p class="control">
                                        <a class="button ok-cart-plus is-primary is-small">
                                            <span class="icon">
                                                <i class="fas fa-plus"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                            <td class="has-text-centered">
                                <span class="ok-cart-item-sum"><?= Yii::$app->formatter->asInteger($item['cart']->price * $item['cart']->qty) ?></span>
                            </td>
                            <td class="has-text-centered">
                                <a href="<?= Url::to(['cart/clear', 'id' => $item['cart']->product->product_id]) ?>"
                                   title="Удалить" data-id="<?= $item['cart']->product->product_id ?>"
                                   class="ok-cart-remove">
                                    <span class="icon has-text-primary"><i class="fas fa-lg fa-times-circle"></i></span>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <tfoot>
                    <tr>
                        <td colspan="5">Количество:</td>
                        <td class="has-text-centered"><span class="ok-cart-qty"><?= $cartQty ?></span></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="5">Сумма:</td>
                        <td class="has-text-centered"><span class="ok-cart-sum"><?= Yii::$app->formatter->asInteger($cartSum) ?></span></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="ok-table-btn">
                            <a class="button is-primary is-large ok-cart-checkout" title="Заказать">
                                <span class="icon is-small"><i class="fas fa-check"></i></span><span>Заказать</span></a>
                        </td>
                    </tr>
                    </tfoot>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</section>