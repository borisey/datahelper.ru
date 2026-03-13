<?php

namespace app\controllers;

use app\models\AddrObj;
use app\models\AdmHierarchy;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $addrObjs = AddrObj::find()
            ->where(['ISACTIVE' => 1])
            ->limit(3)
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

//        print_r($addresses);
//        die();

        $params = [
            'addresses' => $addresses
        ];

        return $this->render('index', $params);
    }
}
