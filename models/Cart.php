<?php

namespace app\models;

use yii\db\ActiveRecord;
use Yii;

class Cart extends ActiveRecord
{

    public function getProduct()
    {
        return $this->hasOne(Product::class, ['product_id' => 'product_id']);
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

    public function add($product)
    {
//        if (!isset($_SESSION['wishlist'][$product->product_id])) {
//            $_SESSION['wishlist'][$product->product_id] = [
//                'product' => $product,
//                'name' => $product->name,
//            ];
//            $_SESSION['wishlist.qty'] = isset($_SESSION['wishlist.qty']) ? $_SESSION['wishlist.qty'] + 1 : 1;
//        }
    }

    public static function clear($product_id)
    {
        $cart = Cart::find()->where(['user_id' => Yii::$app->user->getId(), 'product_id' => $product_id])->one();
        if ($cart)
            $cart->delete();
    }

    public function cart($product)
    {
//        if (isset($_SESSION['wishlist'][$product->product_id])) {
//            $cart = Cart::find()->where(['user_id' => Yii::$app->user->getId(), 'product_id' => $product->product_id])->one();
//            if (!$cart) {
//                $cart = new Cart();
//                $cart->user_id = Yii::$app->user->getId();
//                $cart->product_id = $product->product_id;
//                $cart->qty = 1;
//                $cart->price = $product->price;
//                $cart->save();
//            }
//
//            $_SESSION['wishlist.qty'] -= 1;
//            if ($_SESSION['wishlist.qty'] == 0) unset($_SESSION['wishlist.qty']);
//            unset($_SESSION['wishlist'][$product->product_id]);
//        }
    }

    public function cartall()
    {
//        if (isset($_SESSION['wishlist'])) {
//
//            foreach ($_SESSION['wishlist'] as $item) {
//                $cart = Cart::find()->where(['user_id' => Yii::$app->user->getId(), 'product_id' => $item['product']->product_id])->one();
//                if (!$cart) {
//                    $cart = new Cart();
//                    $cart->user_id = Yii::$app->user->getId();
//                    $cart->product_id = $item['product']->product_id;
//                    $cart->qty = 1;
//                    $cart->price = $item['product']->price;
//                    $cart->save();
//                }
//            }
//            unset($_SESSION['wishlist']);
//            unset($_SESSION['wishlist.qty']);
//        }
    }

//    public function minusplus($product, $sign)
//    {
//        if (isset($_SESSION['wishlist'][$product->product_id])) {
//            $_SESSION['wishlist'][$product->product_id]['qty'] += $sign;
//            $_SESSION['wishlist.qty'] = isset($_SESSION['wishlist.qty']) ? $_SESSION['wishlist.qty'] + $sign : $sign;
//            $_SESSION['wishlist.sum'] = isset($_SESSION['wishlist.sum']) ? $_SESSION['wishlist.sum'] + $sign * $product->price : $sign * $product->price;
//        }
//    }


}
