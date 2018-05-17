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

        $categoryAQ = Category::getCategoryAQBySeoUrl(Yii::$app->request->get('category'));
        $category = Category::getCategoryByAQ($categoryAQ);

        $data['filter'] = Category::getFilter($categoryAQ);
        $data['title'] = $category->name;

//        $products = Category::getProductsByCategory($)

//        $query = Article::find()->where(['status' => 1]);
//        $countQuery = clone $query;
//        $pages = new Pagination(['totalCount' => $countQuery->count()]);
//        $models = $query->offset($pages->offset)
//            ->limit($pages->limit)
//            ->all();
//
//        return $this->render('index', [
//            'models' => $models,
//            'pages' => $pages,
//        ]);


        return $this->render('index', $data);
    }
}
//