<?php

namespace app\controllers;

use app\models\City;
use app\models\Country;
use Yii;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\helpers\VarDumper;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
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
                'class' => VerbFilter::className(),
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

    public function actionIndex()
    {
        $countries = Country::find()->indexBy('id')->all();
        return $this->render('index', [
            'countries' => $countries,
        ]);
    }

    public function actionView()
    {

        if (Yii::$app->request->isAjax) {

            $data = Yii::$app->request->post();
//            VarDumper::dump($data);

            $id = $data['id'];


//        VarDumper::dump($name);
            $cities = City::find()->where(['country_id' => $id])->all();
//            return json_encode($workers, JSON_UNESCAPED_UNICODE);
            $this->layout = 'alter';
            return $this->render('cities', compact('cities'));
        }
    }

}
