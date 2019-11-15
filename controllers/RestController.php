<?php

namespace app\controllers;

use app\models\Places;
use yii\filters\auth\HttpBasicAuth;
use yii\rest\Controller;

class RestController extends Controller
{
    public function behaviors()
    {
        $behaviors = parent::behaviors();

//        $behaviors['authentificator'] = [
//            'class' => HttpBasicAuth::className(),
//        ];

        return $behaviors;
    }

    public function actions()
    {
        return parent::actions();
    }

//    public function actionGetAll()
//    {
//        $places = Places::find()->all();
//
//        return $this->asJson($places);
//    }

    public function actionGetCountry($country)
    {
        $places = Places::find()->where(['like', 'country',  $country])->all();

        return $this->asJson($places);
    }

    public function actionGetRegion($region)
    {
        $places = Places::find()->where(['like', 'region',  $region])->all();

        return $this->asJson($places);
    }

    public function actionGetId($id)
    {
        $places = Places::find()->where(['id' => $id])->all();

        return $this->asJson($places);
    }

    public function actionGetIndex($number)
    {
        $places = Places::find()->where(['number' => $number])->all();

        return $this->asJson($places);
    }
}
