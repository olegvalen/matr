<?php

use yii\helpers\Url;

?>
<div class="container">

    <div class="row">
        <div class="col-sm-3 col-left">
            <div class="block block-account">
                <div class="block-content">
                    <?php foreach ($filter as $agd): ?>
                        <ul>
                            <div><?= $agd['name'] ?></div>
                            <li>
                                <?php foreach ($agd['attrs'] as $ad): ?>
                                    <label class="container-label"><?= $ad['name'] ?>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                <?php endforeach; ?>
                            </li>
                        </ul>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="col-sm-9 item-grid">
            <div class="page-title">
                <h1><?= $title ?></h1>
            </div>
            <div class="toolbar clearfix">
                <div class="sorter">
                    <div class="sort-by">
                        <label>Сортировать:</label>
                        <div class="toolbar-dropdown">
                            <a href=""
                               class="dropdown-toggle" data-toggle="dropdown">По рейтингу<span
                                        class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?= Url::current(['sort' => 'rating']) ?>" class="selected">По
                                        рейтингу</a></li>
                                <li>
                                    <a href="<?= Url::current(['sort' => 'cheap']) ?>">По возрастанию цены</a>
                                </li>
                                <li>
                                    <a href="<?= Url::current(['sort' => 'expensive']) ?>">По убыванию цены</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php $pagination = \yii\widgets\LinkPager::widget(['pagination' => $pages, 'prevPageLabel' => '<', 'nextPageLabel' => '>']); ?>
                <?= $pagination ?>
            </div>

            <?= $this->render('/site/carousel', ['products' => $products,]) ?>

            <div class="toolbar clearfix">
                <div class="sorter">
                    <div class="sort-by">
                        <label>Сортировать:</label>
                        <div class="toolbar-dropdown">
                            <a href="https://www.organize.com/water-products/water-bottles/1-gallon-bottles.html?dir=asc&amp;order=position"
                               class="dropdown-toggle" data-toggle="dropdown">По рейтингу<span
                                        class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="https://www.organize.com/water-products/water-bottles/1-gallon-bottles.html?dir=asc&amp;order=position"
                                       class="selected">По рейтингу</a></li>
                                <li>
                                    <a href="https://www.organize.com/water-products/water-bottles/1-gallon-bottles.html?dir=asc&amp;order=name">По
                                        возрастанию цены</a>
                                </li>
                                <li>
                                    <a href="https://www.organize.com/water-products/water-bottles/1-gallon-bottles.html?dir=asc&amp;order=price">По
                                        убыванию цены</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?= $pagination ?>
            </div>

        </div>
    </div>

</div>
