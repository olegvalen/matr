<?php

namespace app\models;

use Yii;
use yii\base\Model;

class ForgotpasswordForm extends Model
{
    public $email;

    public function rules()
    {
        return [
            ['email', 'required', 'message' => 'Необходимо заполнить "E-mail"'],
            ['email', 'email'],
        ];
    }

    public function forgotpassword()
    {
        if ($this->validate()) {

            $user = User::findByEmail($this->email);
            if ($user) {
                $db = Yii::$app->db;
                $transaction = $db->beginTransaction();
                try {
                    $password = Yii::$app->security->generateRandomString(10);
                    $user->password = Yii::$app->security->generatePasswordHash($password);
                    $user->save();

                    Yii::$app->mailer->compose('forgotpassword', ['password' => $password])->
                    setFrom(['matrasovich.com@gmail.com' => 'Matrasovich.com.ua'])->
                    setTo($this->email)->
                    setSubject('Matrasovich.com.ua | Восстановление пароля')->
                    send();

                    $transaction->commit();

                } catch (\Exception $e) {
                    $transaction->rollBack();
                    throw $e;
                } catch (\Throwable $e) {
                    $transaction->rollBack();
                    throw $e;
                }
                return true;
            } else {
                $this->addError('email', 'Данный e-mail не зарегистрирован!');
                return false;
            }
        }
        return false;
    }
}