<?php

namespace app\models;

use yii\db\ActiveRecord;

class Attribute extends ActiveRecord
{
    public function getAttributeDescriptions()
    {
        return $this->hasOne(AttributeDescription::class, ['attribute_id' => 'attribute_id']);
    }
}