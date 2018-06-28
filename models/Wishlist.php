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
//                'name' => $product->name,
//                'price' => $product->price,
            ];
        }
        $_SESSION['wishlist.qty'] = isset($_SESSION['wishlist.qty']) ? $_SESSION['wishlist.qty'] + $qty : $qty;
        $_SESSION['wishlist.sum'] = isset($_SESSION['wishlist.sum']) ? $_SESSION['wishlist.sum'] + $qty * $product->price : $qty * $product->price;
    }
}
