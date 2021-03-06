<?php

namespace app\models;

use yii\db\ActiveRecord;
use Yii;
use yii\db\Exception;

class Cart extends ActiveRecord
{

    public function getProduct()
    {
        return $this->hasOne(Product::class, ['product_id' => 'product_id']);
    }

    public function getProductOption()
    {
        return $this->hasOne(ProductOption::class, ['product_id' => 'product_id', 'attribute_id' => 'attribute_id']);
    }

    public static function showCartQty()
    {
        if (Yii::$app->user->isGuest)
            return '';
        $q = Cart::find()
            ->select(['user_id', 'qty' => 'sum(qty)'])
            ->where(['user_id' => Yii::$app->user->getId()])
//            ->where(['user_id' => 1])
            ->groupBy('user_id')
            ->one();
        return $q ? $q->qty : '';
    }

    public static function add($product_id, $attribute_id)
    {
        $cart = Cart::find()->where(['user_id' => Yii::$app->user->getId(), 'product_id' => $product_id, 'attribute_id' => $attribute_id])->one();
        if ($cart) {
            $cart->qty += 1;
            $cart->price = ProductOption::getPrice($product_id, $attribute_id);
            $cart->save();
        } else {
            $cart = new Cart();
            $cart->user_id = Yii::$app->user->getId();
            $cart->product_id = $product_id;
            $cart->attribute_id = $attribute_id;
            $cart->qty = 1;
            $cart->price = ProductOption::getPrice($product_id, $attribute_id);
            $cart->save();
        }
    }

    public static function clear($product_id)
    {
        $cart = Cart::find()->where(['user_id' => Yii::$app->user->getId(), 'product_id' => $product_id])->one();
        if ($cart)
            $cart->delete();
    }

    public static function clearAll()
    {
        Cart::deleteAll(['user_id' => Yii::$app->user->getId()]);
    }

    public static function checktout()
    {
        $user_id = Yii::$app->user->getId();

        try {
            $carts = Cart::find()->where(['user_id' => Yii::$app->user->getId()])->all();
            if ($carts) {

                foreach ($carts as $cart) {
                    if ($cart->attribute_id == null) {
                        throw new Exception('Не заполнен размер!');
                    }
                }

                foreach ($carts as $cart) {
                    $cart->price = ProductOption::getPrice($cart->product_id, $cart->attribute_id);
                }

                $qtyTotal = 0;
                $sumTotal = 0;
                foreach ($carts as $cart) {
                    $qtyTotal += $cart->qty;
                    $sumTotal += $cart->qty * $cart->price;
                }

                $order = new Order();
                $order->user_id = $user_id;
                $order->qty = $qtyTotal;
                $order->sum = $sumTotal;
                $order->date_added = date("Y-m-d H:i:s");
                $order->save();

                $order_id = Yii::$app->db->getLastInsertID();
                foreach ($carts as $cart) {
                    $order_product = new OrderProduct();
                    $order_product->order_id = $order_id;
                    $order_product->product_id = $cart->product_id;
                    $order_product->attribute_id = $cart->attribute_id;
                    $order_product->qty = $cart->qty;
                    $order_product->price = $cart->price;
                    $order_product->save();
                }

                Cart::clearAll();

                Yii::$app->mailer->compose()->
                setFrom(['admin@matrasovich.com.ua' => 'Matrasovich.com.ua'])->
                setTo('matrasovich.com@gmail.com')->
                setSubject('Новый заказ!!! ' . date("Y-m-d H:i:s"))->
                send();

                echo json_encode([]);
            }
        } catch (Exception $e) {
            echo json_encode(array(
                'error' => array(
                    'msg' => $e->getMessage(),
                )
            ));
        }
    }

    public static function changeattribute($product_id, $attribute_id, $attribute_idOld)
    {
        $cart = Cart::find()
            ->where(['user_id' => Yii::$app->user->getId(), 'product_id' => $product_id, 'attribute_id' => $attribute_idOld])->one();
        if ($cart) {
            $cart->attribute_id = $attribute_id;
            $cart->price = ProductOption::getPrice($product_id, $attribute_id);
            $cart->save();
            return true;
        }
        return false;
    }

    public static function changeqty($product_id, $attribute_id, $sign)
    {
        $cart = Cart::find()
            ->where(['user_id' => Yii::$app->user->getId(), 'product_id' => $product_id, 'attribute_id' => $attribute_id])->one();
        if ($cart) {
            $cart->updateCounters(['qty' => $sign]);
            return true;
        }
        return false;
    }

    public static function getProductsIDs()
    {
        $cart = Cart::find()
            ->where(['user_id' => Yii::$app->user->getId()])->all();
        if ($cart) {
            $array = array();
            foreach ($cart as $item) {
                $array[] = $item->product_id;
            }
            return $array;
        }
        return $cart;
    }

}