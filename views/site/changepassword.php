<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-main">
            <div class="account-main">
                <h1>Изменение пароля</h1>
                <?php $form = ActiveForm::begin(['id' => 'form-validate',]); ?>
                <div class="content">
                    <?php if (Yii::$app->session->hasFlash('changepassword.success')): ?>
                        <div class="alert alert-success alert-dismissible ok-alert" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            <?= Yii::$app->session->getFlash('changepassword.success'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="fieldset">
                        <h2 class="legend">Старый <span>пароль</span></h2>
                        <ul class="form-list">
                            <li class="fields">
                                <div class="customer-name">
                                    <div class="field name-firstname">
                                        <div class="input-box">
                                            <?= $form->field($model, 'password')->passwordInput(['autofocus' => true, 'placeholder' => 'Старый пароль'])->label(false) ?>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="fieldset">
                        <h2 class="legend">Новый <span>пароль</span></h2>
                        <ul class="form-list">
                            <li class="fields">
                                <div class="field">
                                    <div class="input-box">
                                        <?= $form->field($model, 'newpassword')->passwordInput(['placeholder' => 'Новый пароль'])->label(false) ?>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="input-box">
                                        <?= $form->field($model, 'newpasswordConfirmation')->passwordInput(['placeholder' => 'Подтвердите новый пароль'])->label(false) ?>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="buttons-set">
                        <?= Html::submitButton('Изменить', ['class' => 'button']) ?>
                    </div>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>