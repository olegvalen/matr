<?php

namespace app\models;

use yii\db\ActiveRecord;

class Product extends ActiveRecord
{

    public static function getProductsByIds($ids)
    {
        return Product::find()->where(['product_id' => $ids])->asArray()->all();
    }

    public static function getProductsQueryByCategory($categoryId)
    {
        return Product::find()->where(['category_id' => $categoryId]);
    }

}
