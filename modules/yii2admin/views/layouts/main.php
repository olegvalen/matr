<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use app\models\SubscribeForm;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <link rel="icon" href="<?= Url::to('@web/images/fav.png') ?>" type="image/x-icon"/>
        <link rel="shortcut icon" href="<?= Url::to('@web/images/fav.png') ?>"
              type="image/x-icon"/>
        <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
        <?php $this->head() ?>
    </head>

    <body>

    <section class="hero">
        <div class="hero-head has-background-white-ter">
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-brand has-background-white">
                        <a class="navbar-item has-text-grey ok-has-brand" href="<?= Url::to(['/']) ?>">
                            <span class="icon has-text-primary is-large"><i class="fas fa-home"></i></span>
                        </a>
                        <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <div id="navbarMenuHeroA" class="navbar-menu">
                        <div class="navbar-end">
                            <?php if (!Yii::$app->user->isGuest): ?>
                                <a class="navbar-item has-text-grey" href="<?= Url::to(['site/account']) ?>"
                                   title="Личный кабинет, <?= Yii::$app->user->identity->name ?>">Личный
                                    кабинет, <?= Yii::$app->user->identity->name ?></a>
                            <?php else: ?>
                                <a class="navbar-item has-text-grey" href="<?= Url::to(['site/account']) ?>"
                                   title="Личный кабинет">Личный кабинет</a>
                            <?php endif; ?>
                            <a class="navbar-item has-text-grey" href="<?= Url::to(['wishlist/index']) ?>"
                               title="Избранное">
                                <div class="ok-main-badge-wishlist">
                                    <?php if (isset($_SESSION['wishlist.qty'])): ?>
                                        <span class="badge"
                                              data-badge="<?= $_SESSION['wishlist.qty'] ?>">Избранное</span>
                                    <?php else: ?>
                                        Избранное
                                    <?php endif; ?>
                                </div>
                            </a>
                            <a class="navbar-item has-text-grey" href="<?= Url::to(['cart/index']) ?>"
                               title="Корзина">
                                <div class="ok-main-badge-cart">
                                    <?php $cartQty = \app\models\Cart::showCartQty() ?>
                                    <?php if ($cartQty): ?>
                                        <span class="badge"
                                              data-badge="<?= $cartQty ?>">Корзина</span>
                                    <?php else: ?>
                                        Корзина
                                    <?php endif; ?>
                                </div>
                            </a>
                            <?php if (!Yii::$app->user->isGuest): ?>
                                <a class="navbar-item has-text-grey" href="<?= Url::to(['site/logout']) ?>"
                                   title="Выход">Выход</a>
                            <?php else: ?>
                                <a class="navbar-item has-text-grey" href="<?= Url::to(['site/login']) ?>"
                                   title="Войти">Войти</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <!-- Hero content: will be in the middle -->
        <div class="hero-body">
            <div class="container">
                <div class="level">
                    <div class="level-item has-text-centered">
                        <a href="<?= Url::to(['/']) ?>">
                            <img src="<?= Url::to('@web/images/logo.png') ?>"
                                 alt="Matrasovich.com.ua"></a>
                    </div>
                    <div class="level-item has-text-centered">
                        <div class="field has-addons">
                            <div class="control">
                                <input type="text" class="input is-shadowless ok-main-input-search" placeholder="Поиск">
                            </div>
                            <div class="control">
                                <a class="button is-primary ok-main-btn-search">
                                    <span class="icon has-text-white is-large"><i class="fas fa-search"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hero footer: will stick at the bottom -->
        <div class="hero-foot has-background-black-ter">
            <nav class="tabs">
                <div class="container">
                    <ul>
                        <li><a href="<?= Url::to(['category/2']) ?>" class="has-text-white is-size-4">Топперы</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>

    <?php $this->beginBody() ?>
    <?= $content ?>
    <div class="scroll-top">
        <span class="icon has-text-primary"><i class="fas fa-chevron-circle-up"></i></span>
    </div>
    <section class="section is-clearfix">
        <div class="container">
            123
        </div>
    </section>

    <section class="hero">
        <div class="hero-head has-background-black-ter">
            <section class="section">
                <div class="container">
                    <div class="columns">
                        <div class="column is-one-quarter">
                            <span class="subtitle has-text-grey-lighter">Информация</span>
                            <ul>
                                <li><a class="has-text-grey-light" href="<?= Url::to(['site/about-us']) ?>">О нас</a>
                                </li>
                                <li><a class="has-text-grey-light" href="<?= Url::to(['site/privacy']) ?>">Политика
                                        безопасности</a></li>
                                <li><a class="has-text-grey-light" href="<?= Url::to(['site/terms']) ?>">Условия
                                        соглашения</a></li>
                            </ul>
                        </div>
                        <div class="column is-one-quarter">
                            <span class="subtitle has-text-grey-lighter">Личные данные</span>
                            <ul>
                                <li><a class="has-text-grey-light" href="<?= Url::to(['site/account']) ?>">Личный
                                        кабинет</a></li>
                                <li><a class="has-text-grey-light" href="<?= Url::to(['wishlist/index']) ?>">Мои
                                        закладки</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <?php $this->endBody() ?>

    </body>
    </html>
<?php $this->endPage() ?>