<?php

namespace app\models;

use yii\base\Model;

class SubscribeForm extends Model
{
    public $email;

    public function attributeLabels()
    {
        return [
            'email' => 'e-mail',
        ];
    }

    public function rules()
    {
        return [
            [['email'], 'required'],
            ['email', 'email'],
        ];
    }
}