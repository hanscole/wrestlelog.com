<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PracticeLog */

$this->title = 'Create Practice Log';
$this->params['breadcrumbs'][] = ['label' => 'Practice Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="practice-log-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
