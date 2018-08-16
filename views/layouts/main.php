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
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-106330932-1', 'auto');
        ga('send', 'pageview');
    </script>
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
        <div class="level">
            <div class="level-item is-pulled-left">
                <span class="icon has-text-primary is-large ok-main-contact-icons"><i
                            class="fas fa-envelope"></i></span>
                <?php $form = ActiveForm::begin([
                    'action' => 'site/subscribe',
                    'method' => 'post',
                ]); ?>
                <div class="field has-addons">
                    <div class="control">
                        <?= $form->field(new SubscribeForm(), 'email', [
                            'options' => []])
                            ->textInput()
                            ->input('email', ['placeholder' => 'Ваш e-mail', 'class' => 'input is-shadowless ok-main-input-subscribe'])
                            ->label(false) ?>
                    </div>
                    <div class="control">
                        <?= Html::submitButton('Подписаться', ['class' => 'button is-primary ok-main-btn-subscribe', 'type' => 'submit']) ?>
                    </div>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
            <div class="level-item is-pulled-left">
                <span class="icon has-text-primary is-large ok-main-contact-icons"><i
                            class="fas fa-phone-square"></i></span>
                <div>
                    <a href="tel:098-682-36-17" class="is-size-4"><strong
                                class="has-text-primary">098-682-36-17</strong></a></br>
                    <a href="tel:066-480-16-97" class="is-size-4"><strong
                                class="has-text-primary">066-480-16-97</strong></a>
                </div>
            </div>
            <div class="level-item is-pulled-left">
                <span class="icon has-text-primary is-large ok-main-contact-icons"><i
                            class="fas fa-pen"></i></span>
                <a class="ok-main-connect-icons is-hidden-touch" title="Viber" href="viber://chat?number=380664801697">
                    <span class="icon is-medium" style="color: #59267C"><i
                                class="fab fa-viber fa-2x"></i></span></a>
                <a class="ok-main-connect-icons is-hidden-desktop" title="Viber"
                   href="viber://add?number=380664801697">
                    <span class="icon is-medium" style="color: #59267C"><i
                                class="fab fa-viber fa-2x"></i></span></a>
                <a class="ok-main-connect-icons" title="Telegram" href="tg://resolve?domain=matrasovichcomua"><span
                            class="icon has-text-info is-medium" style="color: #55acee"><i
                                class="fab fa-telegram fa-2x"></i></span></a>
                <a class="ok-main-connect-icons" title="Instagram"
                   href="https://www.instagram.com/matrasovichcomua" target="_blank" rel="nofollow"><span
                            class="icon is-medium" style="color: #e4405f"><i class="fab fa-instagram fa-2x"></i></span></a>
                <a class="ok-main-connect-icons" title="Facebook"
                   onclick="window.open('//www.facebook.com/sharer/sharer.php?u=<?= Url::base(true) ?><?= Url::current() ?>', '_blank', 'scrollbars=0, resizable=1, menubar=0, left=100, top=100, width=550, height=440, toolbar=0, status=0');return false"
                   title="Поделиться в Facebook" target="_blank" rel="nofollow"><span
                            class="icon is-medium" style="color: #3b5999"><i
                                class="fab fa-facebook fa-2x"></i></span></a>
                <a class="ok-main-connect-icons" title="Google+"
                   onclick="window.open('////plus.google.com/share?url=<?= Url::base(true) ?><?= Url::current() ?>', '_blank', 'scrollbars=0, resizable=1, menubar=0, left=100, top=100, width=550, height=440, toolbar=0, status=0');return false"
                   target="_blank" rel="nofollow"><span
                            class="icon is-medium" style="color: #dd4b39"><i
                                class="fab fa-google-plus fa-2x"></i></span></a>
                <a class="ok-main-connect-icons" title="Twitter"
                   onclick="window.open('//twitter.com/intent/tweet?text=<?= Url::base(true) ?><?= Url::current() ?>', '_blank', 'scrollbars=0, resizable=1, menubar=0, left=100, top=100, width=550, height=440, toolbar=0, status=0');return false"
                   target="_blank" rel="nofollow"><span class="icon is-medium" style="color: #55acee"><i
                                class="fab fa-twitter fa-2x"></i></span></a>
            </div>
        </div>

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

