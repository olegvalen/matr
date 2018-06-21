<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$this->title = 'Войдите в личный кабинет или зарегистрируйтесь';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container main-container col1-layout">
    <div class="row">
        <div class="col-md-12 col-main">
            <div class="account-login">
                <div class="page-title">
                    <h1><?= Html::encode($this->title) ?></h1>
                </div>

                <!--                <form action="https://www.organize.com/customer/account/loginPost/" method="post"
                                      id="login-form">
                                    <input name="form_key" type="hidden" value="nO67piNQBgdxdcBB">
                                    <div class="col2-set">
                                        <div class="col-1 registered-users">
                                            <div class="content">
                                                <h2>зарегистрированный <span>пользователь</span></h2>
                                                <ul class="form-list">
                                                    <li>
                                                        <div class="input-box">
                                                            <input type="text" name="login[username]" value="" id="email"
                                                                   class="form-control input-text required-entry validate-email"
                                                                   title="E-mail" placeholder="E-mail">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="input-box">
                                                            <input type="password" name="login[password]"
                                                                   class="form-control input-text required-entry validate-password"
                                                                   id="pass" title="Пароль" placeholder="Пароль">
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="buttons-set">
                                                    <a href="https://www.organize.com/customer/account/forgotpassword/">Забыли
                                                        пароль?</a>
                                                    <button type="submit" class="button f-left" title="Войти" name="send"
                                                            id="send2"><span>Войти</span></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2 new-users">
                                            <div class="content">
                                                <h2>новый <span>пользователь</span></h2>
                                                <div class="buttons-set">
                                                    <button type="button" title="Create an Account" class="button"
                                                            onclick="window.location='https://www.organize.com/customer/account/create/';">
                                                        <span><span>Создать</span></span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>-->

                <?php $form = ActiveForm::begin(['id' => 'login-form',]); ?>
                <div class="col2-set">
                    <div class="col-1 registered-users">
                        <div class="content">
                            <h2>зарегистрированный <span>пользователь</span></h2>
                            <ul class="form-list">
                                <li>
                                    <div class="input-box">
                                        <?= $form->field($model, 'email')->textInput(['autofocus' => true, 'placeholder' => 'E-mail'])->label(false) ?>
                                    </div>
                                </li>
                                <li>
                                    <div class="input-box">
                                        <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Пароль'])->label(false) ?>
                                    </div>
                                </li>
                            </ul>
                            <div class="buttons-set">
                                <?= $form->field($model, 'rememberMe')->checkbox() ?>
                                <a href="<?= Url::to(['site/forgotpassword']) ?>">Забыли
                                    пароль?</a>
                                <?= Html::submitButton('Войти', ['class' => 'button f-left', 'name' => 'login-button']) ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 new-users">
                        <div class="content">
                            <h2>новый <span>пользователь</span></h2>
                            <div class="buttons-set">
                                <button type="button" title="Создать" class="button"
                                        onclick="window.location='<?= Url::to(['site/newcustomer']) ?>';">
                                    <span><span>Создать</span></span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>

<?php /*$form = ActiveForm::begin([
    'id' => 'login-form',
    'layout' => 'horizontal',
    'fieldConfig' => [
        'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
        'labelOptions' => ['class' => 'col-lg-1 control-label'],
    ],
]); */ ?><!--

<? /*= $form->field($model, 'email')->textInput(['autofocus' => true]) */ ?>

<? /*= $form->field($model, 'password')->passwordInput() */ ?>

<? /*= $form->field($model, 'rememberMe')->checkbox([
    'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
]) */ ?>

<div class="form-group">
    <div class="col-lg-offset-1 col-lg-11">
        <? /*= Html::submitButton('Войти', ['class' => 'btn btn-primary', 'name' => 'login-button']) */ ?>
    </div>
</div>

--><?php /*ActiveForm::end(); */ ?>

