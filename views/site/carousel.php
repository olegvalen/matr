<?php

use yii\helpers\Url;
use yii\helpers\Html;

?>

<section class="section">
    <div class="container">
        <div class="columns is-multiline">
            <?php foreach ($products as $item): ?>
                <div class="column is-half-tablet is-one-quarter-desktop">
                    <a href="<?= Url::to("/{$item->seo_url}") ?>"
                       title="<?= $item['name'] ?>">
                        <figure class="image">
                            <?= Html::img("/{$item->getImage()->getPath('300x300')}", ['alt' => $item['name']]) ?>
                        </figure>
                    </a>
                    <p class="has-text-centered"><a href="<?= Url::to("/{$item->seo_url}") ?>"
                                                    title="<?= $item->name ?>"
                                                    class="has-text-grey-dark ok-carousel-name"><?= $item->name ?></a>
                    </p>
                    <p class="has-text-centered has-text-primary"><?= Yii::$app->formatter->asInteger($item->price) ?>
                        грн.</p>
                    <div class="has-text-centered">
                        <a class="button icon is-large is-primary <?= isset($cartProductsIDs) && in_array($item->product_id, $cartProductsIDs) ? 'is-warning ' : '' ?>ok-carousel-cart" title="В корзину"
                           data-id="<?= $item->product_id ?>">
                            <span class="has-text-white"><i class="fas fa-shopping-cart"></i></span>
                        </a>
                        <a href="<?= isset($_SESSION['wishlist']) && key_exists($item->product_id, $_SESSION['wishlist']) ? Url::to(['wishlist/index']) : Url::to(['wishlist/add', 'id' => $item->product_id]) ?>"
                           class="button icon is-large
                        is-primary <?= isset($_SESSION['wishlist']) && key_exists($item->product_id, $_SESSION['wishlist']) ? 'is-warning ' : '' ?>ok-carousel-wishlist" title="В избранное"
                           data-id="<?= $item->product_id ?>">
                        <span class="icon has-text-white"><i
                                    class="fas fa-heart"></i></span>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
