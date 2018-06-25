<?php

?>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-main">
            <div class="account-create">
                <h1>Создание профиля</h1>

                <form action="https://www.organize.com/customer/account/createpost/" method="post" id="form-validate">
                    <div class="content">
                        <div class="fieldset">
                            <h2 class="legend">Персональная <span>информация</span></h2>
                            <ul class="form-list">
                                <li class="fields">
                                    <div class="customer-name">
                                        <div class="field name-firstname">
                                            <div class="input-box">
                                                <input type="text" id="name" name="name" value=""
                                                       title="Имя" maxlength="255"
                                                       class="input-text required-entry" placeholder="Имя">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="input-box">
                                        <input type="text" name="email" id="email_address" value=""
                                               title="E-mail" class="input-text validate-email required-entry"
                                               placeholder="E-mail">
                                    </div>
                                </li>
                                <li class="control">
                                    <div class="input-box">
                                        <input type="checkbox" name="is_subscribed" title="Подписаться на новости"
                                               value="1" id="is_subscribed" class="checkbox">
                                    </div>
                                    <label for="is_subscribed">Подписаться на новости</label>
                                </li>
                            </ul>
                        </div>

                        <div class="fieldset">
                            <h2 class="legend">Информация <span>о пароле</span></h2>
                            <ul class="form-list">
                                <li class="fields">
                                    <div class="field">
                                        <div class="input-box">
                                            <input type="password" name="password" id="password" title="Пароль"
                                                   class="input-text required-entry validate-password"
                                                   placeholder="Пароль">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="input-box">
                                            <input type="password" name="confirmation" title="Подтвердите пароль"
                                                   id="confirmation"
                                                   class="input-text required-entry validate-cpassword"
                                                   placeholder="Подтвердите пароль">
                                        </div>
                                    </div>
                                </li>
                            </ul>

                        </div>

                        <div class="buttons-set">
                            <button type="submit" title="Создать" class="button"><span>Создать</span>
                            </button>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>
</div>