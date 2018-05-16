<?php

namespace app\models;

use yii\db\ActiveRecord;

class CategoryAttributeGroup extends ActiveRecord
{
    public function getAttributeGroups()
    {
        return $this->hasMany(AttributeGroup::class, ['attribute_group_id' => 'attribute_group_id']);
    }


    //    public function getAttributeGroupDescriptions()
//    {
//        return $this->hasMany(AttributeGroupDescription::class, ['attribute_group_id' => 'attribute_group_id']);
//    }

//    public function getAttributeDescriptions()
//    {
//        return $this->hasMany(AttributeDescription::class, ['attribute_id' => 'attribute_ id'])->via('attribute');
//    }
}
//