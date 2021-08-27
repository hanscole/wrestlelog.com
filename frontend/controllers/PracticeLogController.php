<?php

namespace frontend\controllers;

use common\models\PracticeLog;
use Da\User\Controller\PermissionController;
use Yii;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\filters\AccessRule;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PracticeLogController implements the CRUD actions for PracticeLog model.
 */
class PracticeLogController extends \frontend\controllers\Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ];
    }

    /**
     * Lists all PracticeLog models.
     * @return mixed
     */
    public function actionIndex()
    {
        if ($this->getGuest()){
            return $this->redirect('/user/login');
        }

        $query = PracticeLog::find();

        if (!Yii::$app->user->identity->isAdmin) {

            $query->andOnCondition([PracticeLog::tableName() . '.user_id' => Yii::$app->user->id]);
        }
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);



        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PracticeLog model.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        if ($this->getGuest()){
            return  $this->redirect('/user/login');
        }

        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new PracticeLog model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {

        if ($this->getGuest()){
            return  $this->redirect('/user/login');
        }

        $model = new PracticeLog();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PracticeLog model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {

        if ($this->getGuest()){
        return  $this->redirect('/user/login');
    }


        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PracticeLog model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        if ($this->getGuest()){
            return  $this->redirect('/user/login');
        }

        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PracticeLog model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return PracticeLog the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = PracticeLog::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
