<?php

namespace app\controllers;

use app\controllers\actions\site\IndexAction;
use app\controllers\actions\site\IndexFullDevAction;
use app\controllers\actions\site\IndexMinProdAction;
use app\controllers\actions\site\MainAction;
use app\controllers\actions\site\WithLazyLoadingAction;
use app\controllers\actions\site\WithMysqlIndexesAction;
use app\controllers\actions\site\WithoutLazyLoadingAction;

class SiteController extends AbstractController
{
    public function actions()
    {
        return [
            'index'                => IndexAction::class,            // site/index
            'main'                 => MainAction::class,             // site/main
            'with-mysql-indexes'   => WithMysqlIndexesAction::class, // site/with-mysql-indexes

            'index-min-prod'       => IndexMinProdAction::class, // site/index-min-prod
            'index-full-dev'       => IndexFullDevAction::class, // site/index-full-dev

            'with-lazy-loading'    => WithLazyLoadingAction::class,    // site/with-lazy-loading
            'without-lazy-loading' => WithoutLazyLoadingAction::class, // site/without-lazy-loading
        ];
    }
}
