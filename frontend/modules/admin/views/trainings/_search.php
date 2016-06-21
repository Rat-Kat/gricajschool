<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\TrainingsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trainings-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'general_image') ?>

    <?= $form->field($model, 'goal') ?>

    <?= $form->field($model, 'date_next') ?>

    <?php // echo $form->field($model, 'for') ?>

    <?php // echo $form->field($model, 'after') ?>

    <?php // echo $form->field($model, 'how') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
