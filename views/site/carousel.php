<?php

use yii\helpers\Url;

?>
<ul>
    <?php foreach ($products as $item): ?>
        <li>
            <a href="<?= Url::to("/{$item->seo_url}") ?>"
               title="<?= $item['name'] ?>"
               class="product-image">
                <img class="img-responsive" src="<?= "/{$item->getImage()->getPath('300x')}" ?>"
                     alt="<?= $item['name'] ?>">
            </a>
            <div class="product-info">
                <div class="text-center">
                    <a href="<?= Url::to("/{$item->seo_url}") ?>"
                       title="<?= $item->name ?>">
                        <?= $item->name ?></a></div>
                <div class="desc-border"></div>
                <div class="price-box-original">
                    <div class="price-box text-center"><span
                                class="price"><?= Yii::$app->formatter->asInteger($item->price) ?> грн.</span>
                    </div>
                </div>
                <div class="product-hover">
                    <ul>
                        <li>
                            <a href="#"
                               title="В корзину" class="link-cart" data-id="<?= $item->product_id ?>">
                                <span class="glyphicon glyphicon-shopping-cart"></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['wishlist/add', 'id' => $item->product_id]) ?>"
                               title="В избранное" class="link-wishlist" data-id="<?= $item->product_id ?>">
                                <span class="glyphicon glyphicon glyphicon-heart<?php echo isset($_SESSION['wishlist']) && key_exists($item->product_id, $_SESSION['wishlist']) ? ' hover' : '' ?>"></span>
                            </a>
                        </li>
                        <!--                        <li>
                                                    <a href="#"
                                                       title="В сравнение" class="link-compare">
                                                        <span class="glyphicon glyphicon-duplicate"></span>
                                                    </a>
                                                </li>
                        -->                    </ul>
                </div>
            </div>
        </li>
    <?php endforeach; ?>
</ul>