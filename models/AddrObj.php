<?php

namespace app\models;

use yii\db\ActiveRecord;

class AddrObj extends ActiveRecord
{
    public static function tableName()
    {
        return 'ADDR_OBJ';
    }
}