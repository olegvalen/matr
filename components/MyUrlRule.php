<?php

namespace app\components;

use app\models\Category;
use yii\web\UrlRuleInterface;

class MyUrlRule implements UrlRuleInterface
{

    public function createUrl($manager, $route, $params)
    {
        $parts = explode('/', $route);
        if (count($parts) == 2) {
            if ($parts[0] == 'category') {
                if ($parts[1] == 'index') {
                    if (isset($params['category'])) {
                        if (isset($params['sort'], $params['page'])) {
                            $params_keys = array_keys($params);
                            if (array_search('sort', $params_keys) > array_search('page', $params_keys)) {
//                                return $params['category'] . '?sort=' . $params['sort'];
                                return "{$params['category']}?sort={$params['sort']}";
                            }
                        }
                    }
                    $url = $params['category'];
                    $urlSuffix = '';
                    foreach ($params as $key => $value) {
                        if ($key == 'category') continue;
                        if (isset($value))
                            $urlSuffix .= "$key=$value&";
                    }
                    return $url . '?' . rtrim($urlSuffix, '&');
                }
            }
            $model = Category::findOne($parts[1]);
            return $model->seo_url;

            if ($route === 'car/index') {
                if (isset($params['manufacturer'], $params['model'])) {
                    return $params['manufacturer'] . '/' . $params['model'];
                } elseif
                (isset($params['manufacturer'])) {
                    return $params['manufacturer'];
                }
            }
            return false;  // данное правило не применимо
        }
    }


    public function parseRequest($manager, $request)
    {
        ///toppery/filter/category=nedorogie,premium;size=90x190

        $pathInfo = $request->getPathInfo();
        //$data = htmlspecialchars($data, ENT_COMPAT, 'UTF-8');

        $parts = explode('/', $pathInfo);

        if (count($parts) == 1) {
            //one word
            return ['category/index', array('category' => $parts[0])];
        } elseif ($parts[1] == 'filter') {
            $params = ['category' => $parts[0]];
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
//