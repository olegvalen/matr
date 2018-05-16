<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

?>

<div class="container-fluid">
    <div class="row">
        <?php echo Html::img('@web/images/banner.jpg', ['alt' => 'Matrasovich', 'class' => 'img-responsive img-banner']) ?>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 item-grid">
            <h2>Недорогие матрасы</h2>
            <?= $this->render('carousel', [
                'products' => $productsCheap,
            ]) ?>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12 item-grid">
            <h2>Популярные матрасы</h2>
            <?= $this->render('carousel', [
                'products' => $productsPopular,
            ]) ?>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12 item-grid">
            <h2>Премиум матрасы</h2>
            <?= $this->render('carousel', [
                'products' => $productsPremium,
            ]) ?>
        </div>
    </div>
    <div class="row footer-text col-md-12">
        <h1>Здесь вы купите матрас для сна – мечту, комфорт и здоровый отдых!</h1>
        <p>Любой аксессуар, предназначенный для сна, будь то матрас, ортопедическая подушка,
            одеяло или наматрасник -
            это
            неотъемлемая часть, присутствующая в каждом доме. Ведь от них зависит насколько комфортно, уютно и правильно
            вы
            проведете ночной отдых. Именно такую продукцию в широком ассортименте предлагает наш интернет-магазин.
            Matrasovich – сайт, продукция которого уже не один год пользуется популярностью и большим спросом среди
            отечественных и не только покупателей. Подтверждением этого являются положительные отзывы, демократическая
            цена
            и высокое качество товара.</p>
        <h2>Matrasovich – яркая сторона вашей жизни!</h2>
        <p>У нас вы не просто можете купить матрас, заменив старую поверхность мягкой мебели или
            прохудившийся старый
            аксессуар, работая с нами, вы получите все самое лучшее:</p>
        <ul>
            <li>менеджер нашего интернет-магазина проконсультирует вас и ответит на все вопросы по составу,
                наполненности и
                особенности того или иного товара
            </li>
            <li>мы работаем только с проверенными и зарекомендовавшими себя изготовителями, имя которых знакомо всей
                Украине
            </li>
            <li>большой ассортимент продукции, рассчитанный на потребителей с разными доходами. Независимо от стоимости,
                вы
                получите качество, в котором будете убеждаться не один год
            </li>
            <li>наша работа направлена на то, чтобы показать потребителям только самое лучшее. Весь
                ассортимент
                представлен на страницах сайта. Перейдите в любой раздел и убедитесь в этом сами
            </li>
        </ul>
        <h3>Тонкие матрасы на диван, топперы, футоны - это все то, за чем приходят к нам. Наша продукция
            –
            это
            проводник в мир здорового и комфортного сна!</h3>
    </div>
    <div class="row footer-banners">
        <div class="col-md-6">
            <i class="glyphicon glyphicon-envelope"></i>
            <div class="subscribe-container">
                <?php $form = ActiveForm::begin([
                    'action' => 'site/subscribe',
                    'method' => 'post',
                    'options' => ['class' => 'input-group'],
                ]); ?>
                <?= $form->field($modelSubscribeForm, 'email', [
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
            <p><span class="call-us">ПОЗВОНИТЕ НАМ: </span><span><a href="tel:098-682-36-17">098-682-36-17</a></span>
            </p>
        </div>
    </div>
</div>
<!--1-->