<?php

namespace app\controllers\actions\site;

use yii\base\Action;

class IndexMinProdAction extends Action
{
    public function run(): string
    {
        $prodAssets = require \Yii::getAlias('@app/assets-prod.php');
        \Yii::$app->assetManager->bundles = $prodAssets;

        return $this->controller->render('index');
    }
}
