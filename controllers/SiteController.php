<?php

namespace app\controllers;

use app\controllers\actions\site\IndexAction;
use app\controllers\actions\site\MainAction;
use app\controllers\actions\site\withMysqlIndexes;

class SiteController extends AbstractController
{
    public function actions()
    {
        return [
            'index'              => IndexAction::class,      // site/index
            'main'               => MainAction::class,       // site/main
            'with-mysql-indexes' => WithMysqlIndexes::class, // site/with-mysql-indexes
        ];
    }
}
