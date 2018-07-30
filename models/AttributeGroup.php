<?php

namespace app\models;

use yii\db\ActiveRecord;

class AttributeGroup extends ActiveRecord
{
    const OPTION_OFF = 0;
    const OPTION_ON = 1;
    const FILTER_OFF = 0;
    const FILTER_ON = 1;

    public function getAttributeGroupDescriptions()
    {
        return $this->hasOne(AttributeGroupDescription::class, ['attribute_group_id' => 'attribute_group_id']);
    }

    public function getMyAttributes()
    {
        return $this->hasMany(Attribute::class, ['attribute_group_id' => 'attribute_group_id']);
    }

}
