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
use app\models\ProductOption;
use Yii;
use yii\data\Pagination;
use yii\i18n\Formatter;
use yii\web\Controller;
use yii\widgets\Breadcrumbs;

class ProductController extends Controller
{

    public function actionIndex()
    {

        $data = [];
        $data['test'] = 'test';

        $get = Yii::$app->request->get();

        $productQuery = Product::getProductQueryBySeoUrl($get['product']);
        $product = $productQuery->one();

        $categoryParents = Category::getCategoryParents($product->category_id);
        $links = [];
        foreach ($categoryParents as $key => $cp) {
            if ($key == 0) continue;
            $links[] = ['label' => $cp->category->name, 'url' => ["category/{$cp['path_id']}"]];
        }
        $links[] = ['label' => $product->category->name, 'url' => ["category/{$product['category_id']}"]];
        $links[] = $product->name;

        $data['breadcrumbs'] = Breadcrumbs::widget([
            'options' => ['class' => 'breadcrumb'],
            'itemTemplate' => "<li>{link}</li>\n",
            'links' => $links,
        ]);

        $data['product'] = $product;
        $data['options'] = Product::getProductOptions($product->product_id);
        if (count($data['options'])) {
            $data['price'] = $data['options'][0]->value;
        } else {
            $data['price'] = 0;
        };

//        $data['filter'] = Category::getFilter($categoryQuery);
//        $getFilter = $this->getGetFilter($get);
//        $data['filter'] = $this->addUrlToFilter($get['category'], $data['filter'], $getFilter);
//        $data['title'] = $category->name;
//
//        $productsQuery = Product::getProductsQueryByCategory($category->category_id, $this->getProductAttributeIds($getFilter, $data['filter']));
//        $pages = new Pagination(['totalCount' => $productsQuery->count(), 'pageSize' => 9]);
//        $pages->pageSizeParam = false;
//
//        $products = $productsQuery->offset($pages->offset)->orderBy($sortOrder)->limit($pages->limit)->all();
//        $data['products'] = $products;
//        $data['pages'] = $pages;
//
//        list($data['description'], $data['keywords'], $data['robots'], $data['title'], $data['h1']) =
//            $this->getMetaTags($category->name, $this->getSortedFilter($getFilter, $data['filter']), $data['filter'], $get);
//
//        $data['text_description'] = $category->categoryDescriptions->text_description;

        return $this->render('index', $data);
    }

}
