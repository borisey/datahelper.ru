<?php

namespace app\models\fias_optimized;

use yii\db\ActiveRecord;
use Yii;

abstract class AbstractFiasOptimizedModel extends ActiveRecord
{
    public static function getDb() {
        return Yii::$app->get('db_fias_optimized');
    }
}