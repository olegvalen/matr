<?php

namespace app\models;

use yii\db\ActiveRecord;

class Order extends ActiveRecord
{
    public function getItems()
    {
        return $this->hasMany(Item::class, ['id' => 'item_id'])->viaTable('order_item', ['order_id' => 'id']);
    }
}