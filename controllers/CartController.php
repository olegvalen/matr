<?php
/**
 * Created by PhpStorm.
 * User: oleg-d
 * Date: 13.05.18
 * Time: 17:16
 */

namespace app\controllers;

use app\models\Cart;
use app\models\Product;
use app\models\Wishlist;
use yii\web\Controller;
use Yii;

class CartController extends Controller
{

    public function actionIndex()
    {
        if (Yii::$app->getUser()->isGuest) {
            Yii::$app->user->setReturnUrl(Yii::$app->request->url);
            return $this->redirect('/login');
        }

        $data = [];
        $data['carts'] = [];
        $carts = Yii::$app->getUser()->getIdentity()->carts;
        foreach ($carts as $cart) {
            $arr = [];
            $arr['cart'] = $cart;
            $arr['options'] = Product::getProductOptions($cart->product_id);
            $data['carts'][] = $arr;
        }
        $data['cartQty'] = 1000;
        $data['cartSum'] = 2000;
        return $this->render('index', $data);
    }

    public function actionAdd()
    {
//        $id = Yii::$app->request->get('id');
//        $product = Product::findOne($id);
//        if (!$product) return false;
//
//        $wishlist = new Wishlist();
//        $wishlist->add($product);
//        return $session->get('wishlist.qty');
    }

    public function actionClear()
    {
        $product_id = Yii::$app->request->get('id');
        $product = Product::findOne(['product_id' => $product_id]);
        if (!$product) return false;

        Cart::clear($product_id);
    }

    public function actionWishlist()
    {
        $product_id = Yii::$app->request->get('id');
        $product = Product::findOne(['product_id' => $product_id]);
        if (!$product) return false;

        Cart::clear($product_id);

        $wishlist = new Wishlist();
        $wishlist->add($product);
    }

    public function actionChangeattribute()
    {
        $product_id = Yii::$app->request->get('id');
        $attribute_id = Yii::$app->request->get('attribute_id');
        $attribute_idOld = Yii::$app->request->get('attribute_idOld') !== '' ? Yii::$app->request->get('attribute_idOld') : null;
        return Cart::changeattribute($product_id, $attribute_id, $attribute_idOld);
    }

    public function actionCartall()
    {
//        $wishlist = new Wishlist();
//        $wishlist->cartall();
    }

//    public function actionMinusplus()
//    {
//        $id = Yii::$app->request->get('id');
//        $sign = Yii::$app->request->get('sign');
//        $product = Product::findOne($id);
//        if (!$product) return false;
//
//        $wishlist = new Wishlist();
//        $wishlist->minusplus($product, $sign);
//        return true;
//    }

//    public function actionClearAll()
//    {
//        $session->remove('wishlist');
//        $session->remove('wishlist.qty');
//        $session->remove('wishlist.sum');
////        $this->layout = false;
//        return $this->render('wishlist');
//    }

}
