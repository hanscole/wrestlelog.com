<?php
namespace frontend\controllers;


use frontend\models\CalendarSearch;
use Yii;
use yii\web\Controller;

class CalendarController extends Controller
{
    public function actionIndex()
    {
        $searchModel = new CalendarSearch;
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());

        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }
}