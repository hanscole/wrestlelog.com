<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Practice Logs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="practice-log-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Practice Log', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'date',
            'hours',
            'minutes',
            //'created_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
