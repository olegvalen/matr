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
        $this->view->title = 'Matrasovish.com.ua | Избранное';
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'Избранное. Интернет-магазин Matrasovich.com.ua']);
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'Избранное на Matrasovich.com.ua']);
        $this->view->registerMetaTag(['name' => 'robots', 'content' => 'noindex,nofollow']);

        $session = Yii::$app->session;
        $session->open();
        $data = [];
        if (!$session->get('wishlist'))
            $data['wishlist'] = null;
        else {
            $data['wishlist'] = Yii::$app->myComponent->arrayCopy($session->get('wishlist'));
        }
        return $this->render('index', $data);
    }

    public function actionAdd()
    {
        $id = Yii::$app->request->get('id');
        $product = Product::findOne(['product_id' => $id]);
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
        $product = Product::findOne(['product_id' => $id]);
        if (!$product) return false;

        $session = Yii::$app->session;
        $session->open();

        $wishlist = new Wishlist();
        $wishlist->clear($product);
    }

    public function actionCart()
    {
        if (Yii::$app->user->isGuest) {
            Yii::$app->user->setReturnUrl('/wishlist');
            return $this->redirect('/login');
//            return false;
        }

        $id = Yii::$app->request->get('id');
        $product = Product::findOne(['product_id' => $id]);
        if (!$product) return false;

        $session = Yii::$app->session;
        $session->open();

        $wishlist = new Wishlist();
        $wishlist->cart($product);
        if (!$session->get('wishlist')) {
            return $this->redirect('/cart');
        }
    }

    public function actionCartall()
    {
        if (Yii::$app->user->isGuest) {
            Yii::$app->user->setReturnUrl('/wishlist/cartall');
            return $this->redirect('/login');
//            return false;
        }

        $session = Yii::$app->session;
        $session->open();

        $wishlist = new Wishlist();
        $wishlist->cartall();
        return $this->redirect('/cart');
    }

}
