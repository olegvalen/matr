<?php

namespace app\models;

use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
//    public function getCategoryAttributeGroups()
//    {
//        return $this->hasMany(CategoryAttributeGroup::class, ['category_id' => 'category_id']);
//    }

    public function getAttributeGroups()
    {
        return $this->hasMany(AttributeGroup::class, ['attribute_group_id' => 'attribute_group_id'])
            ->viaTable('category_attribute_group', ['category_id' => 'category_id']);

    }

//    public function getAttributeGroupDescriptions()
//    {
//        return $this->hasMany(AttributeGroupDescription::class, ['attribute_group_id' => 'attribute_group_id'])
//            ->viaTable('category_attribute_group', ['category_id' => 'category_id']);
//    }

    public static function getCategoryAQBySeoUrl($seoUrl)
    {
        return Category::find()->where(['seo_url' => $seoUrl])->limit(1);
    }

    public static function getCategoryByAQ($categoryAQ)
    {
        return $categoryAQ->one();
    }

    public static function getFilter($categoryAQ)
    {
        $filter = [];
        $category = $categoryAQ
            ->joinWith(
                [
                    'attributeGroups ag' => function ($query) {
                        $query->onCondition(['ag.filter' => AttributeGroup::FILTER_ON])->orderBy('ag.sort_order')
                            ->joinWith(
                                ['attributeGroupDescriptions agd' => function ($query) {
                                    $query->onCondition(['agd.language_id' => 1]);
                                }]);
                    }])
            ->one();
        foreach ($category->attributeGroups as $ag) {
            $attributes = $ag->getMyAttributes()
                ->with('attributeDescriptions')
                ->joinWith([
                    'attributeDescriptions ad' => function ($query) {
                        $query->onCondition(['ad.language_id' => 1]);
                    }])
                ->all();
            $attrs = [];
            foreach ($attributes as $a) {
                $attrs[] = [
                    'attribute_id' => $a->attributeDescriptions->attribute_id,
                    'name' => $a->attributeDescriptions->name,
                ];
            }
            $filter[] = [
                'attribute_group_id' => $ag->attributeGroupDescriptions->attribute_group_id,
                'name' => $ag->attributeGroupDescriptions->name,
                'attrs' => $attrs,
            ];
        }
        return $filter;
    }

}
//