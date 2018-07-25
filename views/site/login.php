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
                                <a href="<?= Url::to(['site/forgot-password']) ?>">Забыли
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
                                        onclick="window.location='<?= Url::to(['site/new-customer']) ?>';">
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
