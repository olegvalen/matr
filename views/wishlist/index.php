<?php
use yii\helpers\Url;
use yii\helpers\Html;

?>

<section class="section">
    <div class="container">
        <h1 class="title">Избранное</h1>
        <?php if ($wishlist): ?>
            <div style="overflow-x: auto;">
                <table class="table is-striped is-hoverable is-fullwidth">
                    <thead>
                    <tr>
                        <th colspan="4" class="has-text-centered">Товары</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($wishlist as $item): ?>
                        <tr class="ok-row">
                            <td class="has-text-centered">
                                <a href="<?= Url::to("/{$item['product']->seo_url}") ?>"
                                   title="<?= $item['name'] ?>">
                                    <figure class="image">
                                        <?php echo Html::img($item['product']->getImage()->getPath('113x'), ['alt' => $item['name']]) ?>
                                    </figure>
                                </a>
                            </td>
                            <td><a href="<?= Url::to("/{$item['product']->seo_url}") ?>"
                                   title="<?= $item['name'] ?>"><?= $item['name'] ?></a>
                            </td>
                            <td class="has-text-centered">
                                <a class="button ok-wishlist-to-cart is-primary is-small" title="В корзину"
                                   data-id="<?= $item['product']->product_id ?>">В корзину</a>
                            </td>
                            <td class="has-text-centered">
                                <a href="<?= Url::to(['wishlist/clear', 'id' => $item['product']->product_id]) ?>"
                                   title="Удалить" data-id="<?= $item['product']->product_id ?>"
                                   class="ok-wishlist-remove">
                                    <span class="icon has-text-primary"><i class="fas fa-lg fa-times-circle"></i></span>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <tfoot>
                    <tr>
                        <td colspan="4" class="ok-table-btn">
                            <a class="button is-primary ok-wishlist-all-to-cart" title="Добавить все в корзину">Добавить
                                все в корзину</a>
                        </td>
                    </tr>
                    </tfoot>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</section>