<?php

namespace app\models;

use yii\db\ActiveRecord;

class Subscribe extends ActiveRecord
{
    public static function subscribe($email)
    {
        $user = User::find()->where(['email' => $email])->one();
        if ($user) {
            if (!$user->is_subscribed) {
                $user->is_subscribed = true;
                $user->save();
                return;
            }
            return;
        }

        $subscribe = Subscribe::find()->where(['email' => $email])->one();
        if ($subscribe) {
            if (!$subscribe->is_subscribed) {
                $subscribe->is_subscribed = true;
                $subscribe->save();
                return;
            }
            return;
        }

        $subscribe = new Subscribe();
        $subscribe->email = $email;
        $subscribe->is_subscribed = true;
        $subscribe->save();

    }
}
