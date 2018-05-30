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
use yii\widgets\Breadcrumbs;

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

        $categoryParents = Category::getCategoryParents($category->category_id);
        $links = [];
        foreach ($categoryParents as $key => $cp) {
            if ($key == 0) continue;
            $links[] = ['label' => $cp->category->name, 'url' => ["category/{$cp['path_id']}"]];
        }
//        $links[] = $category['name'];
        $links[] = $category->name;

        $data['breadcrumbs'] = Breadcrumbs::widget([
            'options' => ['class' => 'breadcrumb'],
            'itemTemplate' => "<li>{link}</li>\n",
            'links' => $links,
        ]);

        $data['filter'] = Category::getFilter($categoryQuery);
        $getFilter = $this->getGetFilter($get);
        $data['filter'] = $this->addUrlToFilter($get['category'], $data['filter'], $getFilter);
        $data['title'] = $category->name;

        $productsQuery = Product::getProductsQueryByCategory($category->category_id, $this->getProductAttributeIds($getFilter, $data['filter']));
        $pages = new Pagination(['totalCount' => $productsQuery->count(), 'pageSize' => 9]);
//        $pages = new Pagination(['totalCount' => $productsQuery->count()]);
        $pages->pageSizeParam = false;

        $products = $productsQuery->offset($pages->offset)->orderBy($sortOrder)->limit($pages->limit)->all();
        $data['products'] = $products;
        $data['pages'] = $pages;

        list($data['description'], $data['keywords'], $data['robots'], $data['title'], $data['h1']) =
            $this->getMetaTags($category->name, $this->getSortedFilter($getFilter, $data['filter']), $data['filter'], $get);

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
                foreach ($agd['attrs'] as $ag) {
                    if (in_array($ag['seo_url'], $getFilter[$agd['seo_url']]))
                        $sortedFilter[$agd['seo_url']][] = $ag['seo_url'];
                }
            }
        }
        return $sortedFilter;
    }

    public function getProductAttributeIds($getFilter, $filter)
    {

        $ids = [];
        foreach ($filter as $agd) {
            if (key_exists($agd['seo_url'], $getFilter)) {
                $ads = [];
                foreach ($agd['attrs'] as $ad) {
                    if (in_array($ad['seo_url'], $getFilter[$agd['seo_url']])) {
                        $ads[] = $ad['attribute_id'];
                    }
                }
                $ids[] = $ads;
            }
        }
        return $ids;
    }

    public function getMetaTags($categoryName, $getFilter, $filter, $get)
    {
        $description = $keywords = $robots = $title = $h1 = '';
        $noindex = 'index';
        $nofollow = 'follow';

        $noi = 0;
        $nof = 0;
        foreach ($filter as $agd) {
            if (key_exists($agd['seo_url'], $getFilter)) {
                if ($agd['noindex'] == 'noindex') {
                    $noindex = 'noindex';
                } elseif ($agd['noindex'] == 'index') {
                    $noi++;
                }
                if ($agd['nofollow'] == 'nofollow') {
                    $nofollow = 'nofollow';
                } elseif ($agd['nofollow'] == 'follow') {
                    $nof++;
                }

                $description .= "{$agd['description']} ";
                $keywords .= "{$agd['keyword']} ";
                $title .= "{$agd['title']} ";
                $h1 .= "{$agd['h1']} ";
                $num_groups = 0;
                foreach ($agd['attrs'] as $ad) {
                    if (in_array($ad['seo_url'], $getFilter[$agd['seo_url']])) {
                        $description .= "{$ad['description']}, ";
                        $keywords .= "{$ad['keyword']}, ";
                        $title .= "{$ad['title']}, ";
                        $h1 .= "{$ad['h1']}, ";
                        $num_groups++;
                        if ($num_groups > 1) {
                            $noindex = 'noindex';
                            $nofollow = 'nofollow';
                        }
                    }
                }
                $description = rtrim($description, ', ') . ' ';
                $keywords = rtrim($keywords, ', ') . ', ';
                $title = rtrim($title, ', ') . ', ';
                $h1 = rtrim($h1, ', ') . ' ';
            }
        }
        if ($noi > 2) {
            $noindex = 'noindex';
        }
        if ($nof > 2) {
            $nofollow = 'nofollow';
        }

        if (key_exists('sort', $get) || key_exists('page', $get) || key_exists('search', $get)) {
            $noindex = 'noindex';
            $nofollow = 'noindex';
        }

        $description = rtrim(Yii::$app->myComponent->mb_ucfirst($categoryName, 'UTF-8') . ' ' . rtrim($description, ' '), ' ') . '. ' . Yii::$app->params['descriptionEnd'];
        $keywords = rtrim(Yii::$app->myComponent->mb_ucfirst($categoryName, 'UTF-8') . ' ' . rtrim($keywords, ', '), ' ');
        $title = rtrim(Yii::$app->params['titleStart'] . ' ' . $categoryName . ' ' . rtrim($title, ', '), ' ') . ' ' . Yii::$app->params['titleEnd'];
        $h1 = Yii::$app->myComponent->mb_ucfirst($categoryName, 'UTF-8') . ' ' . rtrim($h1, ' ');
        $robots = $noindex . ', ' . $nofollow;

        return [$description, $keywords, $robots, $title, $h1];
    }

}
