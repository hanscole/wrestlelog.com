<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PracticeLog */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="practice-log-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'hours')->textInput() ?>

    <?= $form->field($model, 'minutes')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
