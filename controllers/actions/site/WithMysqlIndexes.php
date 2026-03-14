<?php

namespace app\controllers\actions\site;

use app\models\AddrObj;
use app\models\AdmHierarchy;
use yii\base\Action;

class withMysqlIndexes extends Action
{
    public function run(): string
    {
        $addrObjs = AddrObj::find()
            ->where(['ISACTIVE' => 1])
            ->limit(10)
            ->orderBy(['id' => SORT_ASC])
            ->all();

        $addresses = [];

        foreach ($addrObjs as $addrObj) {

            $parts = [];
            $current = $addrObj->OBJECTID;

            while ($current) {

                $addr = AddrObj::find()
                    ->where(['OBJECTID' => $current])
                    ->andWhere(['ISACTIVE' => 1])
                    ->one();

                if (!$addr) {
                    break;
                }

                $parts[] = $addr->NAME . ' ' . $addr->TYPENAME;

                $parent = AdmHierarchy::find()
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
