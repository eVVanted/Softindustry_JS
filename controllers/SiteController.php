<?php

namespace app\controllers;

use app\models\City;
use app\models\Country;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


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
            $id = $data['id'];
            $cities = City::find()->where(['country_id' => $id])->all();
            $this->layout = 'alter';
            return $this->render('cities', compact('cities'));
        }
    }


    public function actionCreate($id)
    {
        $model = new City();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $cities = City::find()->where(['country_id' =>$model->country_id])->all();
            $this->layout = 'alter';
            return $this->render('cities', compact('cities'));
        }
        $model->country_id=$id;
        $this->layout = 'alter';
        return $this->render('create', [
            'model' => $model,
        ]);

    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $cities = City::find()->where(['country_id' =>$model->country_id])->all();
            $this->layout = 'alter';
            return $this->render('cities', compact('cities'));
        }
        $this->layout = 'alter';

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionDelete()
    {
        if (Yii::$app->request->isAjax) {
            $data = Yii::$app->request->post();
            $id = $data['id'];

            $model = $this->findModel($id);
            $country_id = $model->country_id;
            $model->delete();
            $cities = City::find()->where(['country_id' => $country_id])->all();
            $this->layout = 'alter';
            return $this->render('cities', compact('cities'));
        }
    }

    protected function findModel($id)
    {
        if (($model = City::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }




}
