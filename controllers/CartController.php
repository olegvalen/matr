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
        Cart::clear($product_id);
    }

    public function actionCart()
    {
//        if (Yii::$app->user->isGuest) {
//            $this->redirect('/login');
//            return false;
//        }
//
//        $id = Yii::$app->request->get('id');
//        $product = Product::findOne($id);
//        if (!$product) return false;
//
//        $wishlist = new Wishlist();
//        $wishlist->cart($product);
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
