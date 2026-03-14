<?php

namespace app\controllers\actions\site;

use yii\base\Action;

class IndexAction extends Action
{
    public function run(): string
    {
        return $this->controller->render('index');
    }
}
