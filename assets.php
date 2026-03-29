<?php

Yii::setAlias('@webroot', __DIR__ . '/web');
Yii::setAlias('@web', '/');

return [
    'jsCompressor' => 'terser {from} -o {to} -c -m',
    'cssCompressor' => 'cleancss -o {to} {from}',
    'deleteSource' => false,

    'bundles' => [
        'app\assets\AppAsset',
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
        'yii\bootstrap5\BootstrapAsset',
        'yii\bootstrap5\BootstrapPluginAsset',
    ],

    'targets' => [
        'all' => [
            'class' => 'yii\web\AssetBundle',
            'basePath' => '@webroot/assets',
            'baseUrl' => '@web/assets',
            'js' => 'js/all-{hash}.js',
            'css' => 'css/all-{hash}.css',
        ],
    ],

    'assetManager' => [
        'basePath' => '@webroot/assets',
        'baseUrl' => '@web/assets',
    ],
];