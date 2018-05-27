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
                                    <label class="container-label"><a href="<?= $ad['href'] ?>"><?= $ad['name'] ?><input
                                                    type="checkbox"<?= $ad['checked'] ?>><span class="checkmark"></span></a></label>
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
                               class="dropdown-toggle" data-toggle="dropdown"><?= $sortName ?><span
                                        class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?= Url::current(['sort' => 'rating', 'page' => null]) ?>"
                                       class="selected">По
                                        рейтингу</a></li>
                                <li>
                                    <a href="<?= Url::current(['sort' => 'cheap', 'page' => null]) ?>">По возрастанию
                                        цены</a>
                                </li>
                                <li>
                                    <a href="<?= Url::current(['sort' => 'expensive', 'page' => null]) ?>">По убыванию
                                        цены</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?= \yii\widgets\LinkPager::widget(['pagination' => $pages, 'prevPageLabel' => '<', 'nextPageLabel' => '>']); ?>
            </div>

            <?php if (!empty($products)): ?>
                <?= $this->render('/site/carousel', ['products' => $products,]) ?>
            <?php else: ?>
                Нет данных по выбранному фильтру!
            <?php endif; ?>
        </div>
    </div>

</div>
