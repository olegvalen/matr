<?php

namespace app\models;

use yii\db\ActiveRecord;

class Product extends ActiveRecord
{

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    public function getProductAttributes()
    {
        return $this->hasMany(ProductAttribute::class, ['product_id' => 'product_id']);
    }

    public function getCategory()
    {
        return $this->hasOne(Category::class, ['category_id' => 'category_id']);
    }

    public function getProductDescription()
    {
        return $this->hasOne(ProductDescription::class, ['product_id' => 'product_id']);
    }

    public static function getProductsByIds($ids)
    {
        return Product::find()->where(['product_id' => $ids])->all();
    }

    public static function getProductsQueryByCategory($categoryId, $productAttributeIds)
    {

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

    public static function getProductQueryBySeoUrl($seoUrl)
    {
        return Product::find()
            ->joinWith('category c')
            ->joinWith([
                'productDescription pd' => function ($query) {
                    $query->onCondition(['pd.language_id' => 1]);
                }])
            ->where(['product.seo_url' => $seoUrl])->limit(1);
    }

    public static function getProductOptions($product_id)
    {
        return ProductOption::find()
            ->joinWith('myAttribute a')
            ->joinWith(
                ['attributeDescription ad' => function ($query) {
                    $query->onCondition(['ad.language_id' => 1]);
                }])
            ->where(['product_option.product_id' => $product_id])
            ->orderBy('a.sort_order')
            ->all();
    }
}