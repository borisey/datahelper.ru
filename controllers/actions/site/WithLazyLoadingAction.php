<?php

namespace app\controllers\actions\site;

use app\models\fias_optimized\AddrObjFiasOptimized;
use app\models\fias_optimized\AdmHierarchyFiasOptimized;
use yii\base\Action;

class WithLazyLoadingAction extends Action
{
    public function run(): string
    {
        return $this->controller->render('with-lazy-loading');
    }
}
