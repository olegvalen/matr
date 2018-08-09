<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<section class="section">
    <div class="container">
        <h1 class="title">Изменение пароля</h1>
        <?php if (Yii::$app->session->hasFlash('changepassword.success')): ?>
            <div class="notification is-success">
                <button class="delete"></button><?= Yii::$app->session->getFlash('changepassword.success'); ?>
            </div>
        <?php endif; ?>
        <?php $form = ActiveForm::begin(['id' => 'form-validate',]); ?>
        <div class="columns">
            <div class="column is-half-desktop">
                <div class="box ok-box">
                    <span class="is-uppercase is-size-4">Старый</span> <span
                            class="is-uppercase is-size-4 has-text-primary">пароль</span>
                    <div class="section">
                        <div class="field">
                            <div class="control has-icons-left">
                                <span class="icon is-left"><i class="fas fa-lock"></i></span>
                                <?= $form->field($model, 'password')->passwordInput(['autofocus' => true, 'placeholder' => 'Старый пароль', 'class' => 'input primary'])->label(false) ?>
                            </div>
                        </div>
                    </div>
                    <span class="is-uppercase is-size-4">Новый</span> <span
                            class="is-uppercase is-size-4 has-text-primary">пароль</span>
                    <div class="section">
                        <div class="field">
                            <div class="control has-icons-left">
                                <span class="icon is-left"><i class="fas fa-lock"></i></span>
                                <?= $form->field($model, 'newpassword')->passwordInput(['placeholder' => 'Новый пароль', 'class' => 'input primary'])->label(false) ?>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control has-icons-left">
                                <span class="icon is-left"><i class="fas fa-lock"></i></span>
                                <?= $form->field($model, 'newpasswordConfirmation')->passwordInput(['placeholder' => 'Подтвердите новый пароль', 'class' => 'input primary'])->label(false) ?>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <button class="button is-primary is-medium">Изменить</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</section>
