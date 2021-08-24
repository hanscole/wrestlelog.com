<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MealLog */

$this->title = 'Create Meal Log';
$this->params['breadcrumbs'][] = ['label' => 'Meal Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="meal-log-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
