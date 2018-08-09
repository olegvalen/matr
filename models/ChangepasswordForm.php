<?php

namespace app\models;

use Yii;
use yii\base\Model;

class ChangepasswordForm extends Model
{
    public $password;
    public $newpassword;
    public $newpasswordConfirmation;

    private $_user = false;

    public function rules()
    {
        return [
            [['password', 'newpassword', 'newpasswordConfirmation'], 'required'],
            ['password', 'validatePassword'],
            ['newpasswordConfirmation', 'confirmNewpassword'],
        ];
    }

    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();

            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Пароль введен не верно!');
            }
        }
    }

    public function confirmNewpassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            if ($this->newpassword != $this->newpasswordConfirmation) {
                $this->newpasswordConfirmation = '';
                $this->addError($attribute, 'Пароли не совпадают!');
            }
        }
    }

    public function changepassword()
    {
        if ($this->validate()) {
            $user = $this->getUser();
            $user->password = Yii::$app->security->generatePasswordHash($this->newpassword);
            $user->save();
            return true;
        }
        return false;
    }

    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = Yii::$app->user->getIdentity();
        }

        return $this->_user;
    }

    public function attributeLabels()
    {
        return [
            'password' => 'Пароль',
            'newpassword' => 'Новый пароль',
            'newpasswordConfirmation' => 'Подтвердите новый пароль',
        ];
    }
}