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
                'only' => ['logout', 'changepassword', 'cart'],
                'rules' => [
                    [
                        'actions' => ['logout', 'changepassword', 'cart'],
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
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
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

    public function actionWishlist()
    {
        $session = Yii::$app->session;
        $session->open();
        $data = [];
        $data['wishlist'] = $session->get('wishlist');
        $data['wishlist.qty'] = $session->get('wishlist.qty');
        $data['wishlist.sum'] = $session->get('wishlist.sum');
        return $this->render('wishlist', $data);
    }

    public function actionCart()
    {
        return $this->render('cart');
    }

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
        return $this->render('compare');
    }

    public function actionNewcustomer()
    {
        $model = new NewcustomerForm();
        if ($model->load(Yii::$app->request->post()) && $model->newcustomer()) {
            Yii::$app->session->setFlash('newcustomer.success', 'Профиль успешно создался!');
            return $this->refresh();
        }
//        $model->password = '';
//        $model->confirmation = '';
        return $this->render('newcustomer', ['model' => $model,]);
    }

    public function actionForgotpassword()
    {
        $model = new ForgotpasswordForm();
        if ($model->load(Yii::$app->request->post()) && $model->forgotpassword()) {
            Yii::$app->session->setFlash('forgotpassword.success', 'На указанный e-mail выслано письмо с новым паролем!');
            return $this->refresh();
        }
//        $model->password = '';
//        $model->confirmation = '';
        return $this->render('forgotpassword', ['model' => $model,]);
    }

    public function actionChangepassword()
    {
//        if (!Yii::$app->user->isGuest) {
//            return $this->goHome();
//        }

        $model = new ChangepasswordForm();
        if ($model->load(Yii::$app->request->post()) && $model->changepassword()) {
            Yii::$app->session->setFlash('changepassword.success', 'Пароль успешно изменен!');
            return $this->refresh();
        }


//        $model->password = '';
        return $this->render('changepassword', [
            'model' => $model,
        ]);
    }

}
