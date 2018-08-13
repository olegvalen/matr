<?php

use yii\helpers\Url;
use yii\helpers\Html;

$this->registerMetaTag(['name' => 'description', 'content' => $description]);
$this->registerMetaTag(['name' => 'keywords', 'content' => $keywords]);
$this->registerMetaTag(['name' => 'robots', 'content' => $robots]);
$this->title = $title;
?>
<div id="breadcrumbs">
    <div class="container is-size-6">
        <?= $breadcrumbs ?>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="columns is-multiline">
            <div class="column is-one-fifth">
                <?php foreach ($filter as $agd): ?>
                    <ul class="subtitle"><?= $agd['name'] ?>
                        <?php foreach ($agd['attrs'] as $ad): ?>
                            <li class="field">
                                <a href="<?= $ad['href'] ?>">
                                    <input class="is-checkradio" type="checkbox"<?= $ad['checked'] ?>>
                                    <label><?= $ad['name'] ?></label>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endforeach; ?>
            </div>

            <div class="column">
                <h1 class="title"><?= $h1 ?></h1>
                <nav class="level has-background-white-bis" style="padding: 0.5em 0.75em;">
                    <div class="level-left">
                        <div class="level-item">
                            <div class="dropdown">
                                <div class="dropdown-trigger">
                                    <button class="button" aria-haspopup="true" aria-controls="dropdown-menu">
                                        <span><?= $sortName ?></span>
                                        <span class="icon is-small"><i class="fas fa-angle-down" aria-hidden="true"></i></span>
                                    </button>
                                </div>
                                <div class="dropdown-menu" id="dropdown-menu" role="menu">
                                    <div class="dropdown-content">
                                        <a href="<?= Url::current(['sort' => 'rating', 'page' => null]) ?>"
                                           class="dropdown-item<?= $sortName === 'По рейтингу' ? ' is-active' : '' ?>">По
                                            рейтингу</a>
                                        <a href="<?= Url::current(['sort' => 'cheap', 'page' => null]) ?>"
                                           class="dropdown-item<?= $sortName === 'По возрастанию цены' ? ' is-active' : '' ?>">По
                                            возрастанию цены</a>
                                        <a href="<?= Url::current(['sort' => 'expensive', 'page' => null]) ?>"
                                           class="dropdown-item<?= $sortName === 'По убыванию цены' ? ' is-active' : '' ?>">По
                                            убыванию цены</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="level-right">
                        <div class="level-item">
                            <?= \yii\widgets\LinkPager::widget(['pagination' => $pages, 'prevPageLabel' => '<', 'nextPageLabel' => '>']); ?>
                        </div>
                    </div>
                </nav>

                <?php if (!empty($products)): ?>
                    <div class="columns is-multiline">
                        <?php foreach ($products as $item): ?>
                            <div class="column is-one-third-tablet">
                                <a href="<?= Url::to("/{$item->seo_url}") ?>"
                                   title="<?= $item['name'] ?>">
                                    <figure class="image">
                                        <?= Html::img("/{$item->getImage()->getPath('300x')}", ['alt' => $item['name']]) ?>
                                    </figure>
                                </a>
                                <p class="has-text-centered"><a href="<?= Url::to("/{$item->seo_url}") ?>"
                                                                title="<?= $item->name ?>"
                                                                class="has-text-grey-dark ok-carousel-name"><?= $item->name ?></a>
                                </p>
                                <p class="has-text-centered has-text-primary"><?= Yii::$app->formatter->asInteger($item->price) ?>
                                    грн.</p>
                                <div class="has-text-centered">
                                    <a class="button icon is-large is-primary ok-carousel-cart"
                                       title="В корзину"
                                       data-id="<?= $item->product_id ?>">
                                        <span class="has-text-white"><i class="fas fa-shopping-cart"></i></span>
                                    </a>
                                    <a href="<?= Url::to(['wishlist/add', 'id' => $item->product_id]) ?>"
                                       class="button icon is-large is-primary ok-carousel-wishlist"
                                       title="В избранное"
                                       data-id="<?= $item->product_id ?>">
                        <span class="icon has-text-white"><i
                                    class="fas fa-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php else: ?>
                    Нет данных по выбранному фильтру!
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>
<section class="section">
    <div class="container"><?= $text_description ?></div>
</section>
