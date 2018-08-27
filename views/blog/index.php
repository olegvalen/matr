<?php

use yii\helpers\Url;
use app\assets\AppAsset;
use yii\helpers\Html;

?>

<section class="section">
    <div class="container">
        <h1 class="title">Блог</h1>
        <?php if ((int)$pages->totalCount > $pages->pageSize): ?>
            <nav class="level has-background-white-bis" style="padding: 0.5em 0.75em;">
                <div class="level-left"></div>
                <div class="level-right">
                    <div class="level-item">
                        <?= \yii\widgets\LinkPager::widget(['pagination' => $pages, 'prevPageLabel' => '<', 'nextPageLabel' => '>']); ?>
                    </div>
                </div>
            </nav>
        <?php endif; ?>
        <div class="columns is-multiline">
            <?php foreach ($blogs as $blog): ?>
                <div class="column is-half-tablet is-one-quarter-desktop">
                    <div class="card">
                        <div class="card-image">
                            <a href="/blog/<?= $blog->seo_url ?>"
                               title="<?= $blog->blogDescriptions->name ?>">
                                <figure class="image">
                                    <?= Html::img("/{$blog->getImage()->getPath('300x300')}", ['alt' => $blog->blogDescriptions->name]) ?>
                                </figure>
                            </a>
                        </div>
                        <div class="card-content has-text-centered">
                            <a class="title" href="/blog/<?= $blog->seo_url ?>"><?= $blog->blogDescriptions->name ?></a>
                        </div>
                        <footer class="card-footer">
                            <p class="card-footer-item subtitle">
                                <?= Yii::$app->formatter->format($blog->date_added, 'date'); ?>
                            </p>
                        </footer>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
