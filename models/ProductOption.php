<?php

namespace app\models;

use yii\db\ActiveRecord;

class ProductOption extends ActiveRecord
{
    public function getMyAttribute()
    {
        return $this->hasOne(Attribute::class, ['attribute_id' => 'attribute_id']);
    }

    public function getAttributeDescription()
    {
        return $this->hasOne(AttributeDescription::class, ['attribute_id' => 'attribute_id']);
    }

    public static function getPrice($product_id, $attribute_id)
    {
        $price = ProductOption::find()->where(['product_id' => $product_id, 'attribute_id' => $attribute_id])->one();
        return $price != null ? $price->value : 0;
    }
}