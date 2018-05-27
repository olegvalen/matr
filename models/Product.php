<?php

namespace app\models;

use yii\db\ActiveRecord;

class Product extends ActiveRecord
{

    public function getProductAttributes()
    {
        return $this->hasMany(ProductAttribute::class, ['product_id' => 'product_id']);
    }

    public static function getProductsByIds($ids)
    {
        return Product::find()->where(['product_id' => $ids])->asArray()->all();
    }

    public static function getProductsQueryByCategory($categoryId, $productAttributeIds)
    {
//        return Product::find()
//            ->joinWith([
//                'productAttributes pa' => function ($query) use ($productAttributeIds) {
//                    $query->filterWhere(['pa.attribute_id' => $productAttributeIds]);
//                }
//            ])
//            ->where(['category_id' => $categoryId])
//            ->distinct();

        if (!isset($productAttributeIds)) {
            return Product::find()->where(['category_id' => $categoryId]);
        } else {
            $productQuery = Product::find()->where(['category_id' => $categoryId]);
            foreach ($productAttributeIds as $key => $ids) {
                if ($key == 0) {
                    $productQuery->innerJoinWith("productAttributes pa{$key}")->where(["pa{$key}.attribute_id" => $ids]);
                } else {
                    $productQuery->innerJoinWith("productAttributes pa{$key}")->andWhere(["pa{$key}.attribute_id" => $ids]);
                }
            }
            return $productQuery->distinct();
        }
    }

}
