<?php

namespace app\controllers\actions\site;

use app\models\fias_optimized\AddrObjFiasOptimized;
use app\models\fias_optimized\AdmHierarchyFiasOptimized;
use yii\base\Action;

class WithoutLazyLoadingAction extends Action
{
    public function run(): string
    {
        return $this->controller->render('without-lazy-loading');
    }
}
