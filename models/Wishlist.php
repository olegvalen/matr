<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Wishlist extends Model
{
    public function add($product, $qty = 1)
    {
//        $session = Yii::$app->session;
//        $session->open();
        if (isset($_SESSION['wishlist'][$product->product_id])) {
            $_SESSION['wishlist'][$product->product_id]['qty'] += $qty;
        } else {
            $_SESSION['wishlist'][$product->product_id] = [
                'product' => $product,
                'qty' => $qty,
                'name' => $product->name,
                'price' => $product->price,
            ];
        }
        $_SESSION['wishlist.qty'] = isset($_SESSION['wishlist.qty']) ? $_SESSION['wishlist.qty'] + $qty : $qty;
        $_SESSION['wishlist.sum'] = isset($_SESSION['wishlist.sum']) ? $_SESSION['wishlist.sum'] + $qty * $product->price : $qty * $product->price;
    }

    public function clear($product)
    {
        if (isset($_SESSION['wishlist'][$product->product_id])) {
            $_SESSION['wishlist.qty'] -= $_SESSION['wishlist'][$product->product_id]['qty'];
            $_SESSION['wishlist.sum'] -= $_SESSION['wishlist'][$product->product_id]['qty'] * $_SESSION['wishlist'][$product->product_id]['price'];
            if ($_SESSION['wishlist.qty'] == 0) unset($_SESSION['wishlist.qty']);
            if ($_SESSION['wishlist.sum'] == 0) unset($_SESSION['wishlist.sum']);
            unset($_SESSION['wishlist'][$product->product_id]);
        }
    }

    public function cart($product)
    {
        if (isset($_SESSION['wishlist'][$product->product_id])) {

            //add to cart

            $_SESSION['wishlist.qty'] -= $_SESSION['wishlist'][$product->product_id]['qty'];
            $_SESSION['wishlist.sum'] -= $_SESSION['wishlist'][$product->product_id]['qty'] * $_SESSION['wishlist'][$product->product_id]['price'];
            if ($_SESSION['wishlist.qty'] == 0) unset($_SESSION['wishlist.qty']);
            if ($_SESSION['wishlist.sum'] == 0) unset($_SESSION['wishlist.sum']);
            unset($_SESSION['wishlist'][$product->product_id]);
        }
    }

    public function minusplus($product, $sign)
    {
        if (isset($_SESSION['wishlist'][$product->product_id])) {
            $_SESSION['wishlist'][$product->product_id]['qty'] += $sign;
            $_SESSION['wishlist.qty'] = isset($_SESSION['wishlist.qty']) ? $_SESSION['wishlist.qty'] + $sign : $sign;
            $_SESSION['wishlist.sum'] = isset($_SESSION['wishlist.sum']) ? $_SESSION['wishlist.sum'] + $sign * $product->price : $sign * $product->price;
        }
    }

}
