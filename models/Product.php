<?php

namespace app\models;

use yii\db\ActiveRecord;

class Product extends ActiveRecord
{

    public static function getProductsByIds($ids)
    {
        return Product::find()->where(['product_id' => $ids])->asArray()->all();
    }

}
