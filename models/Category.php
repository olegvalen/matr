<?php

namespace app\models;

use yii\db\ActiveRecord;

class Category extends ActiveRecord
{

    public function getAttributeGroups()
    {
        return $this->hasMany(AttributeGroup::class, ['attribute_group_id' => 'attribute_group_id'])
            ->viaTable('category_attribute_group', ['category_id' => 'category_id']);

    }

    public function getCategoryDescriptions()
    {
        return $this->hasOne(CategoryDescription::class, ['category_id' => 'category_id']);
    }

    public static function getCategoryQueryBySeoUrl($seoUrl)
    {
        return Category::find()
            ->joinWith([
                'categoryDescriptions as cd' => function ($query) {
                    $query->onCondition(['cd.language_id' => 1]);
                }])
            ->where(['category.seo_url' => $seoUrl])->limit(1);
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
                    'seo_url' => $a->attributeDescriptions->seo_url,
                    'title' => $a->attributeDescriptions->title,
                    'description' => $a->attributeDescriptions->description,
                    'keyword' => $a->attributeDescriptions->keyword,
                    'h1' => $a->attributeDescriptions->h1,
                ];
            }
            $filter[] = [
                'attribute_group_id' => $ag->attributeGroupDescriptions->attribute_group_id,
                'name' => $ag->attributeGroupDescriptions->name,
                'seo_url' => $ag->attributeGroupDescriptions->seo_url,
                'title' => $ag->attributeGroupDescriptions->title,
                'description' => $ag->attributeGroupDescriptions->description,
                'keyword' => $ag->attributeGroupDescriptions->keyword,
                'h1' => $ag->attributeGroupDescriptions->h1,
                'nofollow' => $ag->attributeGroupDescriptions->nofollow,
                'noindex' => $ag->attributeGroupDescriptions->noindex,
                'attrs' => $attrs,
            ];
        }
        return $filter;
    }

    public static function getCategoryParents($category_id)
    {
        return CategoryPath::find()
            ->joinWith('category c')
            ->where(['category_path.category_id' => $category_id])
            ->orderBy('category_path.path_id')
            ->all();
    }

}
