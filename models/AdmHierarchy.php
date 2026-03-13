<?php

namespace app\models;

use yii\db\ActiveRecord;

class AdmHierarchy extends ActiveRecord
{
    public static function tableName()
    {
        return 'ADM_HIERARCHY';
    }
}