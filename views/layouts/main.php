<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

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
        <meta name="description" content="Organize.com"/>
        <meta name="keywords" content="Organize.com, Varien, E-commerce"/>
        <link rel="icon" href="https://www.organize.com/media/favicon/default/favicon_1.png" type="image/x-icon"/>
        <link rel="shortcut icon" href="https://www.organize.com/media/favicon/default/favicon_1.png"
              type="image/x-icon"/>
        <link href='//fonts.googleapis.com/css?family=Roboto:300,400,600,700,800' rel='stylesheet' type='text/css'/>
        <link href='https://fonts.googleapis.com/css?family=Oswald:300,400,600,700,800' rel='stylesheet'
              type='text/css'/>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'/>
        <?php $this->head() ?>
    </head>

    <body>

    <div class="top-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-5 top-menu1"><a href="<?= Url::to(['/']) ?>"><span
                                class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
                </div>
                <div class="col-md-7 top-menu2">
                    <a href="#" class="dropdown-toggle"><i class="glyphicon glyphicon-menu-hamburger"></i></a>
                    <ul class="nav dropdown-menu">
                        <li>
                            <a href="<?= Url::to(['site/account']) ?>" title="Личный кабинет">Личный кабинет</a>
                        </li>
                        <li><a href="<?= Url::to(['site/wishlist']) ?>" title="Избранное">Избранное</a></li>
                        <li>
                            <a href="<?= Url::to(['site/cart']) ?>" title="Корзина">Корзина</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="containter header-block">
        <div class="container">
            <div class="row">
                <div class="col-md-3 logo-container">
                    <a href="<?= Url::to(['/']) ?>">
                        <img src="https://www.organize.com/skin/frontend/cartown/default/images/media/logo.png"
                             alt="Organize.com " class="img-responsive"></a>
                </div>
                <div class="col-md-5 search-container">
                    <form class="navbar-search" action="https://www.organize.com/catalogsearch/result/" method="get">
                        <div class="input-group">
                            <input type="text" class="form-control search-query" placeholder="Поиск" name="search"
                                   maxlength="128" autocomplete="off">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i>
                                </button>
                            </div>
                            <div style="border-left: 1px #fff solid;"></div>
                            <div class="input-group-btn search-btn">
                                <button class="btn btn-default" type="submit"><i
                                            class="glyphicon glyphicon-shopping-cart"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4 shop-cart">
                    <a href="https://www.organize.com/checkout/cart/">
                        <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
                    <p class="cart-info">
                        <span>Shopping Cart: </span><span class="price">$0.00</span><br>
                        <span>now in your cart </span><span class="items">0 <span>item(s)</span></span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="nav-container">
        <div class="container padding0">
            <div class="row">
                <div class="col-md-12">
                    <ul class="navigation">

                        <li class="nav-li"><a href="<?= Url::to(['category/2']) ?>">Топперы</a>
                            <div class="dropdown-menu">
                                <div class="col-md-12 menu-wrapper">
                                    <div class="easycatalogimg">
                                        <ul class="easycatalog-grid">
                                            <li class="item">
                                                <h5><a href="<?= Url::to(['toppery/filter/category=nedorogie']) ?>"
                                                       title="Недорогие">Недорогие</a></h5>
                                            </li>
                                            <li class="item">
                                                <h5><a href="<?= Url::to(['toppery/filter/category=premium']) ?>"
                                                       title="Премиум">Премиум</a></h5>
                                            </li>
                                            <li class="item">
                                                <h5>Размеры</h5>
                                                <ul>
                                                    <li><a href="<?= Url::to(['toppery/filter/size=90x190']) ?>"
                                                           title="90x190">90x190</a></li>
                                                    <li><a href="<?= Url::to(['toppery/filter/size=90x200']) ?>"
                                                           title="90x200">90x200</a></li>
                                                    <li><a href="<?= Url::to(['toppery/filter/size=100x190']) ?>"
                                                           title="100x190">100x190</a></li>
                                                    <li><a href="<?= Url::to(['toppery/filter/size=100x200']) ?>"
                                                           title="100x200">100x200</a></li>
                                                    <li><a href="<?= Url::to(['toppery/filter/size=140x190']) ?>"
                                                           title="140x190">140x190</a></li>
                                                    <li><a href="<?= Url::to(['toppery/filter/size=140x200']) ?>"
                                                           title="140x200">140x200</a></li>
                                                    <li><a href="<?= Url::to(['toppery/filter/size=150x190']) ?>"
                                                           title="150x190">150x190</a></li>
                                                    <li><a href="<?= Url::to(['toppery/filter/size=150x200']) ?>"
                                                           title="150x200">150x200</a></li>
                                                    <li><a href="<?= Url::to(['toppery/filter/size=160x190']) ?>"
                                                           title="160x190">160x190</a></li>
                                                    <li><a href="<?= Url::to(['toppery/filter/size=160x200']) ?>"
                                                           title="160x200">160x200</a></li>
                                                    <li><a href="<?= Url::to(['toppery/filter/size=200x200']) ?>"
                                                           title="200x200">200x200</a></li>
                                                </ul>
                                            </li>
                                            <li class="item">
                                                <h5>Наполнитель</h5>
                                                <ul>
                                                    <li>
                                                        <a href="<?= Url::to(['toppery/filter/fill=iskussvennyy-puh']) ?>"
                                                           title="Искусственный пух">Искусственный пух</a></li>
                                                    <li><a href="<?= Url::to(['toppery/filter/fill=gusinnoe-pero']) ?>"
                                                           title="Гусинное перо">Гусинное перо</a></li>
                                                    <li><a href="<?= Url::to(['toppery/filter/fill=utinnoe-pero']) ?>"
                                                           title="Утинное перо">Утинное перо</a></li>
                                                </ul>
                                            </li>
                                            <li class="item">
                                                <h5>Чехол</h5>
                                                <ul>
                                                    <li>
                                                        <a href="<?= Url::to(['toppery/filter/cover=microfiber']) ?>"
                                                           title="Микрофибра">Микрофибра</a></li>
                                                    <li><a href="<?= Url::to(['toppery/filter/cover=hollowfiber']) ?>"
                                                           title="Холлофайбер">Холлофайбер</a></li>
                                                    <li><a href="<?= Url::to(['toppery/filter/cover=cotton']) ?>"
                                                           title="Хлопок">Хлопок</a></li>
                                                    <li><a href="<?= Url::to(['toppery/filter/cover=polyester']) ?>"
                                                           title="Полиэстер">Полиэстер</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <?php $this->beginBody() ?>
    <?= $content ?>
    <div class="scroll-top">
        <span><a href="#"><span class="glyphicon glyphicon-chevron-up"></span></a></span>
    </div>
    <?php $this->endBody() ?>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 footer-block">
                    <h4>Информация</h4>
                    <ul>
                        <li><a href="{{ information.href|raw }}">О нас</a></li>
                        <li><a href="{{ information.href|raw }}">Политика безопастности</a></li>
                        <li><a href="{{ information.href|raw }}">Условия соглашения</a></li>
                        <li><a href="{{ information.href|raw }}">Новости</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-block">
                    <h4>Служба поддержки</h4>
                    <ul>
                        <li><a href="{{ contact|raw }}">Связаться с нами</a></li>
                        <li><a href="{{ return|raw }}">Карта сайта</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-block">
                    <h4>Личный кабинет</h4>
                    <ul>
                        <li><a href="{{ return|raw }}">Личный кабинет</a></li>
                        <li><a href="{{ return|raw }}">История заказов</a></li>
                        <li><a href="{{ return|raw }}">Мои закладки</a></li>
                        <li><a href="{{ return|raw }}">Рассылка новостей</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    </body>
    </html>
<?php $this->endPage() ?>