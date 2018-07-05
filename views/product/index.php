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
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?= $breadcrumbs ?>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-main">
            <h1><?= $product->productDescription->h1 ?></h1>
            <form method="post" id="product_addtocart_form">
                <!--                <input name="form_key" type="hidden" value="wwX6LljT4CA0Q6Ch">-->
                <div class="product-img-box col-md-6">
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
                    <!--                    <img id="image" src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA=" alt=""-->
                    <!--                         class="invisible">-->
                </div>
                <div class="product-shop col-md-6">
                    <div class="price-info">
                        <span class="regular-price" id="product-price-38950"><span
                                    class="price"><?= $formatter->asDecimal($price) ?> грн.</span></span>
                    </div>
                    <div class="add-to-box">
                        <div class="add-to-cart">
                            <div class="qty-container">
                                <label for="qty">Количество:</label>
                                <span class="qty-minus-cart" data-id="<?= $product->product_id ?>">-</span><input type="text"
                                                                                                             name="qty"
                                                                                                             id="qty"
                                                                                                             maxlength="12"
                                                                                                             value="1"
                                                                                                             title="Qty"
                                                                                                             class="input-text qty"
                                                                                                             disabled><span
                                        class="qty-plus-cart" data-id="<?= $product->product_id ?>">+</span>
                            </div>
                            <button type="button" title="Add to Cart" id="product-addtocart-button"
                                    class="button btn-adto-cart" data-id="<?= $product->product_id ?>">
                                <span class="glyphicon glyphicon-shopping-cart"></span>В КОРЗИНУ
                            </button>
                        </div>
                        <select name="size_id" id="size-option">
                            <?php foreach ($options as $option): ?>
                                <option value="<?= $option->attribute_id ?>"
                                        data-price="<?= $formatter->asInteger($option->value) ?> грн.">
                                    <?= $option->attributeDescription->name ?>
                                    (<?= $formatter->asInteger($option->value) ?> грн.)
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <ul class="add-to-links">
                            <li>
                                <a href="<?= Url::to(['wishlist/add', 'id' => $product->product_id]) ?>"
                                   class="link-wishlist" data-id="<?= $product->product_id ?>">
                                    <span class="glyphicon glyphicon-heart"></span>
                                    В ИЗБРАННОЕ</a>
                            </li>
                            <li>
                                <a href="#"
                                   class="link-compare">
                                    <span class="glyphicon glyphicon-duplicate"></span>
                                    В СРАВНЕНИЕ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="footer-text row col-md-12">
        <?= \yii\helpers\Html::decode($product->productDescription->text_description) ?>
    </div>
</div>