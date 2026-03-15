<?php

namespace app\controllers\actions\site;

use app\models\fias_optimized\AddrObjFiasOptimized;
use app\models\fias_optimized\AdmHierarchyFiasOptimized;
use yii\base\Action;

class WithMysqlIndexes extends Action
{
    public function run(): string
    {
        $addrObjs = AddrObjFiasOptimized::find()
            ->where(['ISACTIVE' => 1])
            ->limit(10)
            ->orderBy(['id' => SORT_ASC])
            ->all();

        $addresses = [];

        foreach ($addrObjs as $addrObj) {

            $parts = [];
            $current = $addrObj->OBJECTID;

            while ($current) {

                $addr = AddrObjFiasOptimized::find()
                    ->where(['OBJECTID' => $current])
                    ->andWhere(['ISACTIVE' => 1])
                    ->one();

                if (!$addr) {
                    break;
                }

                $parts[] = $addr->NAME . ' ' . $addr->TYPENAME;

                $parent = AdmHierarchyFiasOptimized::find()
                    ->select('PARENTOBJID')
                    ->where(['OBJECTID' => $current])
                    ->scalar();

                $current = $parent;
            }

            $addresses[] = implode(', ', array_reverse($parts));
        }

        $params = [
            'addresses' => $addresses ?? [],
        ];

        return $this->controller->render('with-mysql-indexes', $params);
    }
}
