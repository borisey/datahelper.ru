<?php

namespace app\controllers\actions\site;

use yii\base\Action;

class IndexFullDevAction extends Action
{
    public function run(): string
    {
        \Yii::$app->assetManager->bundles = [];

        return $this->controller->render('index');
    }
}
