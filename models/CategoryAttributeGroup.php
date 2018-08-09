<?php

namespace app\models;

use yii\db\ActiveRecord;

class CategoryAttributeGroup extends ActiveRecord
{
    public function getAttributeGroups()
    {
        return $this->hasMany(AttributeGroup::class, ['attribute_group_id' => 'attribute_group_id']);
    }
}