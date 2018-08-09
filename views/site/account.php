<?php
use yii\helpers\Url;

?>

<section class="section">
    <div class="container">
        <h1 class="title">Мой профиль</h1>
        <div class="columns">
            <div class="column is-one-fifth">
                <div class="ok-account-ul">
                    <ul>
                        <li><a class="is-size-6" href="<?= Url::to(['wishlist/index']) ?>">Избранное</a></li>
                        <li><a class="is-size-6" href="<?= Url::to(['cart/index']) ?>">Корзина</a></li>
                        <li><a class="is-size-6" href="<?= Url::to(['site/change-password']) ?>">Изменение пароля</a>
                        </li>
                        <li><a class="is-size-6" href="<?= Url::to(['site/logout']) ?>">Выход</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
