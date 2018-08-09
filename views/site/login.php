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
<section class="section">
    <div class="container">
        <h1 class="title"><?= Html::encode($this->title) ?></h1>
        <?php $form = ActiveForm::begin(['id' => 'login-form',]); ?>
        <div class="columns">
            <div class="column is-half">
                <div class="box ok-box">
                    <span class="is-uppercase is-size-4">зарегистрированный</span> <span
                            class="is-uppercase is-size-4 has-text-primary">пользователь</span>
                    <div class="section">
                        <div class="field">
                            <div class="control has-icons-left">
                                <span class="icon is-left"><i class="fas fa-envelope"></i></span>
                                <?= $form->field($model, 'email')->textInput(['autofocus' => true, 'placeholder' => 'E-mail', 'class' => 'input is-primary'])->label(false) ?>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control has-icons-left">
                                <span class="icon is-left"><i class="fas fa-lock"></i></span>
                                <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Пароль', 'class' => 'input is-primary'])->label(false) ?>
                            </div>
                        </div>
                        <div class="field">
                            <label class="checkbox">
                                <?= $form->field($model, 'rememberMe')->checkbox(['class' => 'checkbox']) ?>
                            </label>
                        </div>
                        <div class="field is-grouped">
                            <div class="control">
                                <button class="button is-primary is-medium">Войти</button>
                            </div>
                            <div class="control">
                                <a href="<?= Url::to(['site/forgot-password']) ?>">Забыли пароль?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-half">
                <div class="box ok-box">
                    <span class="is-uppercase is-size-4">новый</span> <span
                            class="is-uppercase is-size-4 has-text-primary">пользователь</span>
                    <div class="section">
                        <div class="field">
                            <div class="control">
                                <a href="<?= Url::to(['site/new-customer']) ?>" class="button is-primary is-medium">Создать</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</section>
