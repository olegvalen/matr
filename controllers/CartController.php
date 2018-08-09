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
use yii\helpers\Url;
use yii\web\Controller;
use Yii;

class CartController extends Controller
{

    public function actionIndex()
    {
        $this->view->title = 'Matrasovish.com.ua | Корзина';
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'Корзина. Интернет-магазин Matrasovich.com.ua']);
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'Корзина на Matrasovich.com.ua']);
        $this->view->registerMetaTag(['name' => 'robots', 'content' => 'noindex,nofollow']);
        if (Yii::$app->getUser()->isGuest) {
            Yii::$app->user->setReturnUrl(Yii::$app->request->url);
            return $this->redirect('/login');
        }

        $data = [];
        $data['carts'] = [];
        $data['cartQty'] = 0;
        $data['cartSum'] = 0;
        $carts = Yii::$app->getUser()->getIdentity()->carts;
        foreach ($carts as $cart) {
            $arr = [];
            $arr['cart'] = $cart;
            $arr['options'] = Product::getProductOptions($cart->product_id);
            $data['carts'][] = $arr;
            $data['cartQty'] += $cart['qty'];
            $data['cartSum'] += $cart['qty'] * $cart['price'];
        }
        return $this->render('index', $data);
    }

    public function actionAdd()
    {
        if (Yii::$app->user->isGuest) {
            Yii::$app->user->setReturnUrl(Yii::$app->request->get('pathname'));
            return $this->redirect('/login');
        }

        $product_id = Yii::$app->request->get('id');
        $attribute_id = Yii::$app->request->get('attribute_id') !== '' ? Yii::$app->request->get('attribute_id') : null;
        $product = Product::findOne(['product_id' => $product_id]);
        if (!$product) return false;

        Cart::add($product_id, $attribute_id);
    }

    public function actionClear()
    {
        $product_id = Yii::$app->request->get('id');
        $product = Product::findOne(['product_id' => $product_id]);
        if (!$product) return false;

        Cart::clear($product_id);
    }

    public function actionClearall()
    {
        Cart::clearAll();
    }

    public function actionCheckout()
    {
        Cart::checktout();
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

    public function actionChangeqty()
    {
        $product_id = Yii::$app->request->get('id');
        $attribute_id = Yii::$app->request->get('attribute_id') !== '' ? Yii::$app->request->get('attribute_id') : null;
        $sign = Yii::$app->request->get('sign');
        return Cart::changeqty($product_id, $attribute_id, $sign);
    }

}
