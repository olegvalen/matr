<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-main">
            <div class="account-main">
                <h1>Создание профиля</h1>
                <?php $form = ActiveForm::begin(['id' => 'form-validate',]); ?>
                <div class="content">
                    <?php if (Yii::$app->session->hasFlash('newcustomer.success')): ?>
                        <div class="alert alert-success alert-dismissible ok-alert" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            <?= Yii::$app->session->getFlash('newcustomer.success'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="fieldset">
                        <h2 class="legend">Персональная <span>информация</span></h2>
                        <ul class="form-list">
                            <li class="fields">
                                <div class="customer-name">
                                    <div class="field name-firstname">
                                        <div class="input-box">
                                            <?= $form->field($model, 'name')->textInput(['autofocus' => true, 'placeholder' => 'Имя'])->label(false) ?>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="input-box">
                                    <?= $form->field($model, 'email')->textInput(['placeholder' => 'E-mail'])->label(false) ?>
                                </div>
                            </li>
                            <li class="control">
                                <div class="input-box">
                                    <?= $form->field($model, 'is_subscribed')->checkbox() ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="fieldset">
                        <h2 class="legend">Информация <span>о пароле</span></h2>
                        <ul class="form-list">
                            <li class="fields">
                                <div class="field">
                                    <div class="input-box">
                                        <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Пароль'])->label(false) ?>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="input-box">
                                        <?= $form->field($model, 'confirmation')->passwordInput(['placeholder' => 'Подтвердите пароль'])->label(false) ?>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="buttons-set">
                        <?= Html::submitButton('Создать', ['class' => 'button']) ?>
                    </div>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>