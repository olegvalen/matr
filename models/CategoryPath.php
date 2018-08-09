<?php

namespace app\models;

use yii\db\ActiveRecord;

class CategoryPath extends ActiveRecord
{
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['category_id' => 'path_id']);
    }
}