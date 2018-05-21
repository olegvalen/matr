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

        $get = Yii::$app->request->get();
        $sortOrder = 'sort_order ASC';
        $data['sortName'] = 'По рейтингу';
        if (isset($get['sort'])) {
            if ($get['sort'] == 'cheap') {
                $sortOrder = 'price ASC';
                $data['sortName'] = 'По возрастанию цены';
            } elseif ($get['sort'] == 'expensive') {
                $sortOrder = 'price DESC';
                $data['sortName'] = 'По убыванию цены';
            }
        }

        $categoryQuery = Category::getCategoryQueryBySeoUrl($get['category']);
        $category = $categoryQuery->one();

        $data['filter'] = Category::getFilter($categoryQuery);
        $sortedFilter = $this->getSortedFilter($get, $data['filter']);
        $data['filter'] = $this->addUrlToFilter($get['category'], $data['filter']);
        $data['title'] = $category->name;

        $productsQuery = Product::getProductsQueryByCategory($category->category_id);
        $pages = new Pagination(['totalCount' => $productsQuery->count(), 'pageSize' => 9]);
//        $pages = new Pagination(['totalCount' => $productsQuery->count()]);
        $pages->pageSizeParam = false;

        $products = $productsQuery->offset($pages->offset)->orderBy($sortOrder)->limit($pages->limit)->all();
        $data['products'] = $products;
        $data['pages'] = $pages;

        return $this->render('index', $data);
    }

    public function addUrlToFilter($categoryName, &$filter)
    {
        ///toppery/filter/category=nedorogie,premium;size=90x190
        foreach ($filter as &$agd) {
            foreach ($agd['attrs'] as &$ad) {
                $ad['href'] = "/{$categoryName}/filter/{$agd['seo_url']}={$ad['seo_url']}";
            }
            unset($ad);
        }
        unset($agd);
        return $filter;
    }

    public function getSortedFilter($get, $filter)
    {
        $sortedFilter = [];
        foreach ($filter as $key => $agd) {
            if (key_exists($agd['seo_url'] . 'Filter', $get)) {
                $attributeDesciptions = explode(',', $get[$agd['seo_url'] . 'Filter']);
                foreach ($agd['attrs'] as $ag) {
                        if(in_array($ag))
//                    $sortedFilter[$agd['seo_url']] =
                }
            }
        }
    }

}
