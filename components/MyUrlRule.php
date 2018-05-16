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
                $model = Category::findOne($parts[1]);
                return $model->seo_url;
            }
            return false;
        }

        if ($route === 'car/index') {
            if (isset($params['manufacturer'], $params['model'])) {
                return $params['manufacturer'] . '/' . $params['model'];
            } elseif (isset($params['manufacturer'])) {
                return $params['manufacturer'];
            }
        }
        return false;  // данное правило не применимо
    }

    public function parseRequest($manager, $request)
    {
        $pathInfo = $request->getPathInfo();
        //$data = htmlspecialchars($data, ENT_COMPAT, 'UTF-8');
        $parts = explode('/', $pathInfo);
        if (count($parts) == 1) {
            //one word
            return ['category/index', array('category' => $parts[0])];
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