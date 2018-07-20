<?php

namespace app\controllers;

use app\models\ChangepasswordForm;
use app\models\ForgotpasswordForm;
use app\models\NewcustomerForm;
use app\models\Product;
use app\models\SubscribeForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'change-password', 'cart'],
                'rules' => [
                    [
                        'actions' => ['logout', 'change-password', 'cart'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post', 'get'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {

        $this->view->title = 'Matrasovish.com.ua';
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'Интернет-магазин Matrasovish.com.ua. Матрасы, наматрасники, подушки, одеяла, товары для сна. Официальная гарантия. Доставка по всей Украине.']);
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'интернет, магазин, Matrasovish.com.ua, матрас, наматрасник, подушка, одеяло , товары для сна, купить, куплю, в Днепре, в Украине, Днепр, Украина']);

        return $this->render('index', [
            'productsCheap' => Product::getProductsByIds([10, 1, 4, 5]),
            'productsPopular' => Product::getProductsByIds([2, 7, 11, 9]),
            'productsPremium' => Product::getProductsByIds([14, 12, 15, 13]),
        ]);

    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
//        if (!Yii::$app->user->isGuest) {
////            return $this->goHome();
////            return $this->goBack();
//            return $this->redirect(Yii::$app->user->getReturnUrl());
//        }
//
//        $model = new LoginForm();
//        if ($model->load(Yii::$app->request->post()) && $model->login()) {
//            return $this->goBack();
//        }
//
//        $model->password = '';
//        return $this->render('login', [
//            'model' => $model,
//        ]);

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(Yii::$app->user->getReturnUrl());
//            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionAccount()
    {
        $this->view->title = 'Matrasovish.com.ua | Личный кабинет';
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'Личный кабинет. Интернет-магазин Matrasovich.com.ua']);
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'Личный кабинет на Matrasovich.com.ua']);
        $this->view->registerMetaTag(['name' => 'robots', 'content' => 'noindex,nofollow']);

        //        return $this->render('account');
        if (!Yii::$app->user->isGuest) {
            return $this->render('account');
        }
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
//            return $this->goBack();
            return $this->render('account');
        }
        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

//    public function actionWishlist()
//    {
//        $session = Yii::$app->session;
//        $session->open();
//        $data = [];
//        if (!$session->get('wishlist'))
//            $data['wishlist'] = null;
//        else {
//            $data['wishlist'] = Yii::$app->myComponent->arrayCopy($session->get('wishlist'));
//        }
//        return $this->render('wishlist', $data);
//    }

//    public function actionCart()
//    {
//        $data = [];
//        $carts = Yii::$app->getUser()->getIdentity()->carts;
//        foreach ($carts as $cart) {
//            $arr = [];
//            $arr['cart'] = $cart;
//            $arr['options'] = Product::getProductOptions($cart->product_id);
//            $data['carts'][] = $arr;
//        }
//        return $this->render('cart', $data);
//    }

    public function actionSubscribe()
    {
        $model = new SubscribeForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            echo 'Email is valid';
        }
        $this->goBack();
    }

    public function actionCompare()
    {
        $this->view->title = 'Matrasovish.com.ua | Сравнение';
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'Сравнение. Интернет-магазин Matrasovich.com.ua']);
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'Сравнение на Matrasovich.com.ua']);
        $this->view->registerMetaTag(['name' => 'robots', 'content' => 'noindex,nofollow']);
        return $this->render('compare');
    }

    public function actionNewCustomer()
    {
        $this->view->title = 'Matrasovish.com.ua | Новый покупатель';
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'Новый покупатель. Интернет-магазин Matrasovich.com.ua']);
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'Новый покупатель на Matrasovich.com.ua']);
        $this->view->registerMetaTag(['name' => 'robots', 'content' => 'noindex,nofollow']);

        $model = new NewcustomerForm();
        if ($model->load(Yii::$app->request->post()) && $model->newcustomer()) {
            Yii::$app->session->setFlash('newcustomer.success', 'Профиль успешно создался!');
            return $this->refresh();
        }
//        $model->password = '';
//        $model->confirmation = '';
        return $this->render('newCustomer', ['model' => $model,]);
    }

    public function actionForgotPassword()
    {
        $this->view->title = 'Matrasovish.com.ua | Забыли пароль';
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'Забыли пароль. Интернет-магазин Matrasovich.com.ua']);
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'Забыли пароль на Matrasovich.com.ua']);
        $this->view->registerMetaTag(['name' => 'robots', 'content' => 'noindex,nofollow']);

        $model = new ForgotpasswordForm();
        if ($model->load(Yii::$app->request->post()) && $model->forgotpassword()) {
            Yii::$app->session->setFlash('forgotpassword.success', 'На указанный e-mail выслано письмо с новым паролем!');
            return $this->refresh();
        }
//        $model->password = '';
//        $model->confirmation = '';
        return $this->render('forgotPassword', ['model' => $model,]);
    }

    public function actionChangePassword()
    {
//        if (!Yii::$app->user->isGuest) {
//            return $this->goHome();
//        }

        $this->view->title = 'Matrasovish.com.ua | Изменение пароля';
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'Изменение пароля. Интернет-магазин Matrasovich.com.ua']);
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'Изменение пароля на Matrasovich.com.ua']);
        $this->view->registerMetaTag(['name' => 'robots', 'content' => 'noindex,nofollow']);

        $model = new ChangepasswordForm();
        if ($model->load(Yii::$app->request->post()) && $model->changepassword()) {
            Yii::$app->session->setFlash('changepassword.success', 'Пароль успешно изменен!');
            return $this->refresh();
        }


//        $model->password = '';
        return $this->render('changePassword', [
            'model' => $model,
        ]);
    }

    public function actionAboutUs()
    {
        $this->view->title = 'Matrasovish.com.ua | О нас';
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'О нас. Интернет-магазин Matrasovich.com.ua']);
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'О нас на Matrasovich.com.ua']);
        return $this->render('aboutUs');
    }

    public function actionPrivacy()
    {
        $this->view->title = 'Matrasovish.com.ua | Политика безопасности';
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'Политика безопасности. Интернет-магазин Matrasovich.com.ua']);
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'Политика безопасности на Matrasovich.com.ua']);
        return $this->render('privacy');
    }

    public function actionTerms()
    {
        $this->view->title = 'Matrasovish.com.ua | Условия соглашения';
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'Условия соглашения. Интернет-магазин Matrasovich.com.ua']);
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'Условия соглашения на Matrasovich.com.ua']);
        return $this->render('terms');
    }

    public function actionSearch()
    {
        $this->view->title = 'Matrasovish.com.ua | Поиск';
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'Поиск. Интернет-магазин Matrasovich.com.ua']);
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'Поиск на Matrasovich.com.ua']);
        $this->view->registerMetaTag(['name' => 'robots', 'content' => 'noindex,nofollow']);
        return $this->render('search');
    }
}
