<?php
use yii\helpers\Url;

?>
<div class="container">
    <div class="row">
        <div class="col-main">
            <div class="col-md-3 col-left">
                <div class="block block-account">
                    <div class="block-title">
                        <strong><span>Мой профиль</span></strong>
                    </div>
                    <div class="block-content">
                        <ul>
                            <li><a href="<?= Url::to(['wishlist/index']) ?>">Избранное</a></li>
                            <li><a href="<?= Url::to(['cart/index']) ?>">Корзина</a></li>
                            <li><a href="<?= Url::to(['site/compare']) ?>">Сравнение</a></li>
                            <li><a href="<?= Url::to(['site/change-password']) ?>">Изменение пароля</a></li>
                            <li><a href="<?= Url::to(['site/logout']) ?>">Выход</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>