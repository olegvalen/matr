<?php
/**
 * Created by PhpStorm.
 * User: oleg-d
 * Date: 13.05.18
 * Time: 17:16
 */

namespace app\controllers;

use app\models\Category;
use app\models\Product;
use Yii;
use yii\data\Pagination;
use yii\web\Controller;

class CategoryController extends Controller
{
    public function actionIndex()
    {

        $data = [];

        $categoryQuery = Category::getCategoryQueryBySeoUrl(Yii::$app->request->get('category'));
        $category = $categoryQuery->one();

        $data['filter'] = Category::getFilter($categoryQuery);
        $data['title'] = $category->name;

        $productsQuery = Product::getProductsQueryByCategory($category->category_id);
        $pages = new Pagination(['totalCount' => $productsQuery->count(), 'pageSize' => 10]);
//        $pages = new Pagination(['totalCount' => $productsQuery->count()]);
        $pages->pageSizeParam = false;
        $products = $productsQuery->offset($pages->offset)->limit($pages->limit)->all();
        $data['products'] = $products;
        $data['pages'] = $pages;

        return $this->render('index', $data);
    }
}
//