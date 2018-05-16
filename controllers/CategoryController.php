<?php
/**
 * Created by PhpStorm.
 * User: oleg-d
 * Date: 13.05.18
 * Time: 17:16
 */

namespace app\controllers;

use app\models\Category;
use Yii;
use yii\web\Controller;

class CategoryController extends Controller
{
    public function actionIndex()
    {

        $data = [];

        $data['filter'] = Category::getFilter(Yii::$app->request->get('category'));

        return $this->render('index', $data);
    }
}
//