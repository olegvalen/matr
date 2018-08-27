<?php

namespace app\models;

use yii\db\ActiveRecord;

class Blog extends ActiveRecord
{
    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    public function getBlogDescriptions()
    {
        return $this->hasOne(BlogDescription::class, ['blog_id' => 'blog_id']);
    }

    public static function getBlogQueryBySeoUrl($seoUrl)
    {
        return Blog::find()
            ->joinWith([
                'blogDescriptions as bd' => function ($query) {
                    $query->onCondition(['bd.language_id' => 1]);
                }
            ])
            ->where(['seo_url' => $seoUrl])->limit(1);
    }

    public static function getBlogs()
    {
        return Blog::find()
            ->joinWith([
                'blogDescriptions as bd' => function ($query) {
                    $query->onCondition(['bd.language_id' => 1]);
                }
            ]);
    }

}