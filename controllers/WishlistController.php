<?php
/**
 * Created by PhpStorm.
 * User: oleg-d
 * Date: 13.05.18
 * Time: 17:16
 */

namespace app\controllers;

use app\models\Product;
use app\models\Wishlist;
use yii\web\Controller;
use Yii;

class WishlistController extends Controller
{

    public function actionIndex()
    {
    }

    public function actionAdd()
    {
        $id = Yii::$app->request->get('id');
        $product = Product::findOne($id);
        if (!$product) return false;

        $session = Yii::$app->session;
        $session->open();

        $wishlist = new Wishlist();
        $wishlist->add($product);
        return $session->get('wishlist.qty');
    }

    public function actionClear()
    {
        $id = Yii::$app->request->get('id');
        $product = Product::findOne($id);
        if (!$product) return false;

        $session = Yii::$app->session;
        $session->open();
        $qty = $_SESSION['wishlist'][$id]['qty'];

        $wishlist = new Wishlist();
        $wishlist->clear($product);
        return $qty;
    }

    public function actionCart()
    {
        $id = Yii::$app->request->get('id');
        $product = Product::findOne($id);
        if (!$product) return false;

        $session = Yii::$app->session;
        $session->open();
        $qty = $_SESSION['wishlist'][$id]['qty'];

        $wishlist = new Wishlist();
        $wishlist->cart($product);
        return $qty;
    }

    public function actionMinusplus()
    {
        $id = Yii::$app->request->get('id');
        $sign = Yii::$app->request->get('sign');
        $product = Product::findOne($id);
        if (!$product) return false;

        $session = Yii::$app->session;
        $session->open();

        $wishlist = new Wishlist();
        $wishlist->minusplus($product, $sign);
        return true;
    }

//    public function actionClearAll()
//    {
//        $session = Yii::$app->session;
//        $session->open();
//        $session->remove('wishlist');
//        $session->remove('wishlist.qty');
//        $session->remove('wishlist.sum');
////        $this->layout = false;
//        return $this->render('wishlist');
//    }

}
