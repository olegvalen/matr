<?php

namespace app\components;

use app\models\Category;
use app\models\Product;
use yii\web\UrlRuleInterface;

class MyUrlRule implements UrlRuleInterface
{

    public function createUrl($manager, $route, $params)
    {
        $parts = explode('/', $route);
        if (count($parts) == 2) {
            if ($parts[0] == 'category') {
                if ($parts[1] == 'index') {
                    // filter
                    $url = $params['category'];
                    $filter = '';
                    if (isset($params['filter'])) {
                        foreach ($params as $key => $value) {
                            if (substr_compare($key, 'Filter', -6) === 0) {
                                $filter .= substr($key, 0, -6) . "={$value};";
                            }
                        }
                        $filter = '/filter/' . rtrim($filter, ';');
                    }

                    // params
                    $urlParams = '';
                    $flag = true;
                    if (isset($params['sort'], $params['page'])) {
                        $params_keys = array_keys($params);
                        if (array_search('sort', $params_keys) > array_search('page', $params_keys)) {
                            $urlParams = "?sort={$params['sort']}";
                            $flag = false;
                        }
                    }
                    if ($flag) {
                        foreach ($params as $key => $value) {
                            if (!($key == 'sort' or $key == 'page')) continue;
                            if (isset($value))
                                $urlParams .= "$key=$value&";
                        }
                        $urlParams = empty($urlParams) ? '' : '?' . rtrim($urlParams, '&');
                    }

                    return "{$url}{$filter}{$urlParams}";
                }
            }
            $model = Category::findOne($parts[1]);
            return $model->seo_url;

//            if ($route === 'car/index') {
//                if (isset($params['manufacturer'], $params['model'])) {
//                    return $params['manufacturer'] . '/' . $params['model'];
//                } elseif
//                (isset($params['manufacturer'])) {
//                    return $params['manufacturer'];
//                }
//            }
//            return false;  // данное правило не применимо
        } elseif (count($parts) == 3) {
            // 1/images/image-by-item-and-alias
            if ($parts[1] == 'images') {
                return $params['item0'] . $params['item'] . $params['dirtyAlias'];
            } else { //yii2admin/attribute-group/view?id=1
                return $route . (!empty($params) ? '?' . http_build_query($params) : '');
            }
        }
    }


    public
    function parseRequest($manager, $request)
    {
        ///toppery/filter/category=premium,nedorogie;size=90x190

        $pathInfo = $request->getPathInfo();
        //$data = htmlspecialchars($data, ENT_COMPAT, 'UTF-8');

        $parts = explode('/', $pathInfo);

        if (count($parts) == 1) {
            //one word
            $count = Category::find()->where(['seo_url' => $parts[0]])->count();
            if ($count) {
                return ['category/index', array('category' => $parts[0])];
            }
            $count = Product::find()->where(['seo_url' => $parts[0]])->count();
            if ($count) {
                return ['product/index', array('product' => $parts[0])];
            }
        } elseif ($parts[1] == 'filter') {
            $params = ['category' => $parts[0], 'filter' => ''];
            $filters = explode(';', $parts[2]);
            foreach ($filters as $filter) {
                $attributeGroup = explode('=', $filter);
                $params[$attributeGroup[0] . 'Filter'] = $attributeGroup[1];
            }
            return ['category/index', $params];
        }

        if (preg_match('%^(\w+)(/(\w+))?$%', $pathInfo, $matches)) {
            // Ищем совпадения $matches[1] и $matches[3]
            // с данными manufacturer и model в базе данных
            // Если нашли, устанавливаем $params['manufacturer'] и/или $params['model']
            // и возвращаем ['car/index', $params]
        }
        return false;  // данное правило не применимо
    }
}