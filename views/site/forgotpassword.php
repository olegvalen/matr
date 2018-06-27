<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-main">
            <div class="account-main">
                <h1>Восстановление пароля</h1>
                <?php $form = ActiveForm::begin(['id' => 'form-validate',]); ?>
                <div class="content">
                    <?php if (Yii::$app->session->hasFlash('forgotpassword.success')): ?>
                        <div class="alert alert-success alert-dismissible ok-alert" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            <?= Yii::$app->session->getFlash('forgotpassword.success'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="fieldset">
                        <h2 class="legend">Восстановление <span>пароля</span></h2>
                        <ul class="form-list">
                            <li>
                                <div class="input-box">
                                    <?= $form->field($model, 'email')->textInput(['autofocus'=>true, 'placeholder' => 'E-mail'])->label(false) ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="buttons-set">
                        <?= Html::submitButton('Восстановить', ['class' => 'button']) ?>
                    </div>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>