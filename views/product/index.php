<?php

use yii\helpers\Url;
use app\assets\AppAsset;

$this->registerJsFile(Yii::$app->request->baseUrl . '/js/magiczoomplus.js', ['depends' => [AppAsset::class]]);
$this->registerCssFile(Yii::$app->request->baseUrl . '/css/magiczoomplus.css', ['depends' => [AppAsset::class]]);
$this->registerCssFile(Yii::$app->request->baseUrl . '/css/magiczoomplus.module.css', ['depends' => [AppAsset::class]]);
$this->registerMetaTag(['name' => 'description', 'content' => $product->productDescription->description]);
$this->registerMetaTag(['name' => 'keywords', 'content' => $product->productDescription->keyword]);
$this->title = $product->productDescription->title;
$formatter = Yii::$app->formatter;
?>
<div id="breadcrumbs">
    <div class="container is-size-6">
        <?= $breadcrumbs ?>
    </div>
</div>

<section class="section">
    <div class="container">
        <h1 class="title"><?= $product->productDescription->h1 ?></h1>
        <div class="columns">
            <div class="column is-three-quarters">
                <div class="product-img-box">
                    <!-- Begin magiczoomplus -->
                    <div class="MagicToolboxContainer selectorsBottom minWidth">
                        <div class="magic-slide mt-active" data-magic-slide="zoom"><a id="MagicZoomPlusImage38950"
                                                                                      class="MagicZoom"
                                                                                      href="<?= "/{$product->getImage()->getPathToOrigin()}" ?>"
                                                                                      title="<?= $product->name ?>"
                                                                                      data-options="zoomWidth:600;zoomHeight:600;selectorTrigger:hover;lazyZoom:true;rightClick:true;zoomMode:preview;expandCaption:false;cssClass:white-bg;hint:off;"
                                                                                      data-mobile-options="zoomWidth:auto;zoomHeight:auto;lazyZoom:false;zoomMode:zoom;cssClass:;hint:off;textHoverZoomHint:Touch to zoom;textClickZoomHint:Double tap to zoom;textExpandHint:Tap to expand;"><img
                                        itemprop="image"
                                        src="<?= "/{$product->getImage()->getPath('650x650')}" ?>"
                                        alt="<?= $product->name ?>"/></a>
                        </div>
                        <div class="magic-slide" data-magic-slide="360"></div>
                        <div class="MagicToolboxSelectorsContainer">
                            <div id="MagicToolboxSelectors38950" class="">
                                <?php foreach ($product->getImages() as $img): ?>
                                    <a data-magic-slide-id="zoom"
                                       data-zoom-id="MagicZoomPlusImage38950"
                                       href=<?= "/{$img->getPathToOrigin()}" ?>
                                       data-image=<?= "/{$img->getPath('650x650')}" ?>
                                       title="<?= $product->name ?>"><img
                                                src=<?= "/{$img->getPath('65x65')}" ?>
                                                alt="<?= $product->name ?>"/></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <p class="title has-text-primary ok-product-price"><?= $formatter->asInteger($price) ?>
                    грн.</p>
                <div class="field">
                    <div class="control">
                        <div class="select is-primary is-medium">
                            <select id="size-option">
                                <?php foreach ($options as $option): ?>
                                    <option value="<?= $option->attribute_id ?>"
                                            data-price="<?= $formatter->asInteger($option->value) ?> грн.">
                                        <?= $option->attributeDescription->name ?>
                                        (<?= $formatter->asInteger($option->value) ?> грн.)
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="buttons">
                    <a class="button is-primary <?= isset($cartProductsIDs) && in_array($product->product_id, $cartProductsIDs) ? 'is-warning ' : '' ?> is-large ok-product-cart" title="В корзину"
                       data-id="<?= $product->product_id ?>"><span class="icon is-small"><i
                                    class="fas fa-shopping-cart"></i></span><span>В корзину</span></a>
                    <a class="button is-primary <?= isset($_SESSION['wishlist']) && key_exists($product->product_id, $_SESSION['wishlist']) ? 'is-warning ' : '' ?>ok-product-wishlist"
                       title="В избранное"
                       data-id="<?= $product->product_id ?>"
                       href="<?= isset($_SESSION['wishlist']) && key_exists($product->product_id, $_SESSION['wishlist']) ? Url::to(['wishlist/index']) : Url::to(['wishlist/add', 'id' => $product->product_id]) ?>"><span
                                class="icon is-small"><i
                                    class="fas fa-heart"></i></span><span>В избранное</span></a>
                </div>
                <hr>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="content">
            <?= \yii\helpers\Html::decode($product->productDescription->text_description) ?>
        </div>
    </div>
</section>
