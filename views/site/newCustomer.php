<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
<section class="section">
    <div class="container">
        <h1 class="title">Создание профиля</h1>
        <?php if (Yii::$app->session->hasFlash('newcustomer.success')): ?>
            <div class="notification is-success">
                <button class="delete"></button><?= Yii::$app->session->getFlash('newcustomer.success'); ?>
            </div>
        <?php endif; ?>
        <?php $form = ActiveForm::begin(['id' => 'form-validate']); ?>
        <div class="box ok-box">
            <div class="columns">
                <div class="column is-half">
                    <span class="is-uppercase is-size-4">персональная</span> <span
                            class="is-uppercase is-size-4 has-text-primary">информация</span>
                    <div class="section">
                        <div class="field">
                            <div class="control has-icons-left">
                                <span class="icon is-left"><i class="fas fa-user"></i></span>
                                <?= $form->field($model, 'name')->textInput(['autofocus' => true, 'placeholder' => 'Имя', 'class' => 'input primary'])->label(false) ?>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control has-icons-left">
                                <span class="icon is-left"><i class="fas fa-envelope"></i></span>
                                <?= $form->field($model, 'email')->textInput(['placeholder' => 'E-mail', 'class' => 'input primary'])->label(false) ?>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control has-icons-left">
                                <span class="icon is-left"><i class="fas fa-phone"></i></span>
                                <?= $form->field($model, 'phone')->textInput(['placeholder' => 'Телефон', 'class' => 'input primary'])->label(false) ?>
                            </div>
                        </div>
                        <div class="field">
                            <label class="checkbox">
                                <?= $form->field($model, 'is_subscribed')->checkbox(['class' => 'checkbox']) ?>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="column is-half">
                    <span class="is-uppercase is-size-4">информация</span> <span
                            class="is-uppercase is-size-4 has-text-primary">о пароле</span>
                    <div class="section">
                        <div class="field">
                            <div class="control has-icons-left">
                                <span class="icon is-left"><i class="fas fa-lock"></i></span>
                                <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Пароль', 'class' => 'input primary'])->label(false) ?>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control has-icons-left">
                                <span class="icon is-left"><i class="fas fa-lock"></i></span>
                                <?= $form->field($model, 'confirmation')->passwordInput(['placeholder' => 'Подтвердите пароль', 'class' => 'input primary'])->label(false) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <button class="button is-primary is-medium" onclick="ga('send', 'event', 'registration', 'click');">
                        Создать
                    </button>
                </div>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</section>
