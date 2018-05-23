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
        $getFilter = $this->getGetFilter($get);
        $data['filter'] = $this->addUrlToFilter($get['category'], $data['filter'], $getFilter);
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

    public function addUrlToFilter($categoryName, &$filter, $getFilter)
    {
        ///toppery/filter/category=premium,nedorogie;size=90x190
        foreach ($filter as &$agd) {
            $agdExists = key_exists($agd['seo_url'], $getFilter);
            foreach ($agd['attrs'] as &$ad) {
                $getFilterCopy = $getFilter;
                if ($agdExists) {
                    $key = array_search($ad['seo_url'], $getFilterCopy[$agd['seo_url']]);
                    if ($key !== false) {
                        unset($getFilterCopy[$agd['seo_url']][$key]);
                        $checked = ' checked';
                    } else {
                        $getFilterCopy[$agd['seo_url']][] = $ad['seo_url'];
                        $checked = '';
                    }
                } else {
                    $getFilterCopy[$agd['seo_url']][] = $ad['seo_url'];
                    $checked = '';
                }
                $sortedFilter = $this->getSortedFilter($getFilterCopy, $filter);
                $href = "/{$categoryName}" . (count($sortedFilter) != 0 ? '/filter/' : '');
                foreach ($sortedFilter as $key => $value) {
                    $href .= "{$key}=" . implode(',', $value) . ';';
                }
                $ad['href'] = rtrim($href, ';');
                $ad['checked'] = $checked;
            }
            unset($ad);
        }
        unset($agd);
        return $filter;
    }

    public function getGetFilter($get)
    {
        $getFilter = [];
        foreach ($get as $key => $value) {
            if (substr_compare($key, 'Filter', -6) === 0) {
                $getFilter[substr($key, 0, -6)] = explode(',', $value);
            }
        }
        return $getFilter;
    }

    public function getSortedFilter($getFilter, $filter)
    {
        $sortedFilter = [];
        foreach ($filter as $key => $agd) {
            if (key_exists($agd['seo_url'], $getFilter)) {
//                $attributeDesciptions = explode(',', $getFilter[$agd['seo_url']]);
                foreach ($agd['attrs'] as $ag) {
                    if (in_array($ag['seo_url'], $getFilter[$agd['seo_url']]))
                        $sortedFilter[$agd['seo_url']][] = $ag['seo_url'];
                }
            }
        }
        return $sortedFilter;
    }

}
