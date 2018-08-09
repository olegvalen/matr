<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
<section class="section">
    <div class="container">
        <h1 class="title">Восстановление пароля</h1>
        <?php if (Yii::$app->session->hasFlash('forgotpassword.success')): ?>
            <div class="notification is-success">
                <button class="delete"></button><?= Yii::$app->session->getFlash('forgotpassword.success'); ?>
            </div>
        <?php endif; ?>
        <?php $form = ActiveForm::begin(['id' => 'form-validate',]); ?>
        <div class="columns">
            <div class="column is-half-desktop">
                <div class="box ok-box">
                    <span class="is-uppercase is-size-4">Введите</span> <span
                            class="is-uppercase is-size-4 has-text-primary">e-mail</span>
                    <div class="section">
                        <div class="field">
                            <div class="control has-icons-left">
                                <span class="icon is-left"><i class="fas fa-envelope"></i></span>
                                <?= $form->field($model, 'email')->textInput(['autofocus' => true, 'placeholder' => 'E-mail', 'class' => 'input primary'])->label(false) ?>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <button class="button is-primary is-medium">Восстановить</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</section>