<?php

namespace app\models;

use Yii;
use yii\base\Model;

class NewcustomerForm extends Model
{
    public $name;
    public $email;
    public $password;
    public $confirmation;
    public $is_subscribed = true;
    public $phone;

    public function rules()
    {
        return [
            ['name', 'required', 'message' => 'Необходимо заполнить "Имя"'],
            ['email', 'required', 'message' => 'Необходимо заполнить "E-mail"'],
            ['password', 'required', 'message' => 'Необходимо заполнить "Пароль"'],
            ['phone', 'required', 'message' => 'Необходимо заполнить "Телефон"'],
            ['confirmation', 'required', 'message' => 'Необходимо заполнить "Подтверждение пароля"'],
            [['name'], 'trim'],
            ['email', 'email'],
            [['phone'], 'string', 'max' => 13],
            ['confirmation', 'confirmPassword'],
            ['is_subscribed', 'boolean'],
        ];
    }

    public function confirmPassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            if ($this->password != $this->confirmation) {
                $this->confirmation = '';
                $this->addError($attribute, 'Пароли не совпадают.');
            }
        }
    }

    public function newcustomer()
    {
        if ($this->validate()) {
            if (User::findByEmail($this->email)) {
                $this->addError('email', 'Данный e-mail уже существует!');
                return false;
            }
            $user = new User();
            $user->name = $this->name;
            $user->email = $this->email;
            $user->password = Yii::$app->security->generatePasswordHash($this->password);
            $user->generateAuthKey();
            $user->is_subscribed = $this->is_subscribed;
            $user->phone = $this->phone;
            $user->save();
            return true;
        }
        return false;
    }

    public function attributeLabels()
    {
        return [
            'is_subscribed' => 'Подписаться на новости',
        ];
    }
}