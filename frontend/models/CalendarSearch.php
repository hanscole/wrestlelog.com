<?php
namespace frontend\models;

use Da\User\Model\User;
use Yii;
use yii\data\ActiveDataProvider;

class CalendarSearch extends Calendar
{
    public function search($params)
    {
        $query = User::find()->where(['id'=>Yii::$app->user->getId()]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => ['pageSize' => 30],
            'sort'=> ['defaultOrder' => ['start'=>SORT_DESC]]
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }else{
            return $dataProvider;
        }

    }
}