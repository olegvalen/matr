<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
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
        <link rel="icon" href="<?= Url::to('@web/images/cart.png') ?>" type="image/x-icon"/>
        <link rel="shortcut icon" href="<?= Url::to('@web/images/cart.png') ?>"
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
                <div class="col-md-7 top-menu2 toolbar-dropdown">
                    <a href="#" class="nav-btn dropdown-toggle" data-toggle="dropdown"><i
                                class="glyphicon glyphicon-menu-hamburger"></i></a>
                    <ul class="dropdown-menu">
                        <li>
                            <?php if (!Yii::$app->user->isGuest): ?>
                                <a href="<?= Url::to(['site/account']) ?>"
                                   title="Личный кабинет, <?= Yii::$app->user->identity->name ?>">Личный
                                    кабинет, <?= Yii::$app->user->identity->name ?></a>
                            <?php else: ?>
                                <a href="<?= Url::to(['site/account']) ?>" title="Личный кабинет">Личный кабинет</a>
                            <?php endif; ?>
                        </li>
                        <li><a href="<?= Url::to(['wishlist/index']) ?>"
                               title="Избранное">Избранное<span
                                        class="badge ok-badge-wishlist"><?php echo isset($_SESSION['wishlist.qty']) ? $_SESSION['wishlist.qty'] : '' ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['cart/index']) ?>" title="Корзина">Корзина<span
                                        class="badge ok-badge ok-badge-cart"><?php echo \app\models\Cart::showCartQty() ?></span></a>
                        </li>
<!--                        <li>
                            <a href="<?/*= Url::to(['site/compare']) */?>" title="Сравнение">Сравнение</a>
                        </li>
-->                        <li>
                            <?php if (!Yii::$app->user->isGuest): ?>
                                <a href="<?= Url::to(['site/logout']) ?>" title="Выход">Выход</a>
                            <?php else: ?>
                                <a href="<?= Url::to(['site/login']) ?>" title="Войти">Войти</a>
                            <?php endif; ?>
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
                        <img src="<?= Url::to('@web/images/logo.png') ?>"
                             alt="Matrasovich.com.ua" class="img-responsive"></a>
                </div>
                <div class="col-md-5 search-container">
                    <form class="navbar-search" method="get">
                        <div class="input-group">
                            <input type="text" class="form-control search-query" placeholder="Поиск" name="search"
                                   maxlength="128" autocomplete="off">
                            <div class="input-group-btn">
                                <button class="btn btn-default btn-search" type="submit">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </div>
                            <!--                            <div style="border-left: 1px #fff solid;"></div>
                                                        <div class="input-group-btn search-btn">
                                                            <button class="btn btn-default" type="submit"><i
                                                                        class="glyphicon glyphicon-shopping-cart"></i>
                                                            </button>
                                                        </div>
                            -->                        </div>
                    </form>
                </div>
                <!--                <div class="col-md-4 shop-cart">
                                    <a href="#">
                                        <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
                                    <p class="cart-info">
                                        <span>Shopping Cart: </span><span class="price">$0.00</span><br>
                                        <span>now in your cart </span><span class="items">0 <span>item(s)</span></span>
                                    </p>
                                </div>
                -->            </div>
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
                                                <div>
                                                    <a href="<?= Url::to(['category/index', 'category' => 'toppery', 'filter' => '', 'categoryFilter' => 'nedorogie']) ?>"
                                                       title="Недорогие">Недорогие</a></div>
                                            </li>
                                            <li class="item">
                                                <div>
                                                    <a href="<?= Url::to(['category/index', 'category' => 'toppery', 'filter' => '', 'categoryFilter' => 'premium']) ?>"
                                                       title="Премиум">Премиум</a></div>
                                            </li>
                                            <li class="item">
                                                <div>Размеры</div>
                                                <ul>
                                                    <li>
                                                        <a href="<?= Url::to(['category/index', 'category' => 'toppery', 'filter' => '', 'sizeFilter' => '90x190']) ?>"
                                                           title="90x190">90x190</a></li>
                                                    <li>
                                                        <a href="<?= Url::to(['category/index', 'category' => 'toppery', 'filter' => '', 'sizeFilter' => '90x200']) ?>"
                                                           title="90x200">90x200</a></li>
                                                    <li>
                                                        <a href="<?= Url::to(['category/index', 'category' => 'toppery', 'filter' => '', 'sizeFilter' => '100x190']) ?>"
                                                           title="100x190">100x190</a></li>
                                                    <li>
                                                        <a href="<?= Url::to(['category/index', 'category' => 'toppery', 'filter' => '', 'sizeFilter' => '100x200']) ?>"
                                                           title="100x200">100x200</a></li>
                                                    <li>
                                                        <a href="<?= Url::to(['category/index', 'category' => 'toppery', 'filter' => '', 'sizeFilter' => '140x190']) ?>"
                                                           title="140x190">140x190</a></li>
                                                    <li>
                                                        <a href="<?= Url::to(['category/index', 'category' => 'toppery', 'filter' => '', 'sizeFilter' => '140x200']) ?>"
                                                           title="140x200">140x200</a></li>
                                                    <li>
                                                        <a href="<?= Url::to(['category/index', 'category' => 'toppery', 'filter' => '', 'sizeFilter' => '150x190']) ?>"
                                                           title="150x190">150x190</a></li>
                                                    <li>
                                                        <a href="<?= Url::to(['category/index', 'category' => 'toppery', 'filter' => '', 'sizeFilter' => '150x200']) ?>"
                                                           title="150x200">150x200</a></li>
                                                    <li>
                                                        <a href="<?= Url::to(['category/index', 'category' => 'toppery', 'filter' => '', 'sizeFilter' => '160x190']) ?>"
                                                           title="160x190">160x190</a></li>
                                                    <li>
                                                        <a href="<?= Url::to(['category/index', 'category' => 'toppery', 'filter' => '', 'sizeFilter' => '160x200']) ?>"
                                                           title="160x200">160x200</a></li>
                                                    <li>
                                                        <a href="<?= Url::to(['category/index', 'category' => 'toppery', 'filter' => '', 'sizeFilter' => '200x200']) ?>"
                                                           title="200x200">200x200</a></li>
                                                </ul>
                                            </li>
                                            <li class="item">
                                                <div>Наполнитель</div>
                                                <ul>
                                                    <li>
                                                        <a href="<?= Url::to(['category/index', 'category' => 'toppery', 'filter' => '', 'fillFilter' => 'iskussvennyy-puh']) ?>"
                                                           title="Искусственный пух">Искусственный пух</a></li>
                                                    <li>
                                                        <a href="<?= Url::to(['category/index', 'category' => 'toppery', 'filter' => '', 'fillFilter' => 'gusinnoe-pero']) ?>"
                                                           title="Гусинное перо">Гусинное перо</a></li>
                                                    <li>
                                                        <a href="<?= Url::to(['category/index', 'category' => 'toppery', 'filter' => '', 'fillFilter' => 'utinnoe-pero']) ?>"
                                                           title="Утинное перо">Утинное перо</a></li>
                                                </ul>
                                            </li>
                                            <li class="item">
                                                <div>Чехол</div>
                                                <ul>
                                                    <li>
                                                        <a href="<?= Url::to(['category/index', 'category' => 'toppery', 'filter' => '', 'coverFilter' => 'microfiber']) ?>"
                                                           title="Микрофибра">Микрофибра</a></li>
                                                    <li>
                                                        <a href="<?= Url::to(['category/index', 'category' => 'toppery', 'filter' => '', 'coverFilter' => 'hollowfiber']) ?>"
                                                           title="Холлофайбер">Холлофайбер</a></li>
                                                    <li>
                                                        <a href="<?= Url::to(['category/index', 'category' => 'toppery', 'filter' => '', 'coverFilter' => 'cotton']) ?>"
                                                           title="Хлопок">Хлопок</a></li>
                                                    <li>
                                                        <a href="<?= Url::to(['category/index', 'category' => 'toppery', 'filter' => '', 'coverFilter' => 'polyester']) ?>"
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
    <div class="container">
        <div class="row footer-banners">
            <div class="col-md-6">
                <i class="glyphicon glyphicon-envelope"></i>
                <div class="subscribe-container">
                    <?php $form = ActiveForm::begin([
                        'action' => 'site/subscribe',
                        'method' => 'post',
                        'options' => ['class' => 'input-group'],
                    ]); ?>
                    <?= $form->field(new SubscribeForm(), 'email', [
                        'options' => [
                        ]
                    ])->textInput()->input('email', ['placeholder' => 'Ваш e-mail'])->label(false) ?>
                    <div class="input-group-btn">
                        <?= Html::submitButton('ПОДПИСАТЬСЯ', ['class' => 'btn button', 'type' => 'submit']) ?>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
            <div class="col-md-6">
                <i class="glyphicon glyphicon-earphone"></i>
                <p><span class="call-us">ПОЗВОНИТЕ НАМ: </span><span><a
                                href="tel:098-682-36-17">098-682-36-17</a></span>
                </p>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 footer-block">
                    <div>Информация</div>
                    <ul>
                        <li><a href="<?= Url::to(['site/about-us']) ?>">О нас</a></li>
                        <li><a href="<?= Url::to(['site/privacy']) ?>">Политика безопастности</a></li>
                        <li><a href="<?= Url::to(['site/terms']) ?>">Условия соглашения</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-block">
                    <div>Личный данные</div>
                    <ul>
                        <li><a href="<?= Url::to(['site/account']) ?>">Личный кабинет</a></li>
                        <li><a href="<?= Url::to(['wishlist/index']) ?>">Мои закладки</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>