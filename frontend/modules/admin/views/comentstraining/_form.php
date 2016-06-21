<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Comentstraining */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comentstraining-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="form-group">

        <? $title= \common\models\Trainings::find()->all();?>
        <? $items=\yii\helpers\ArrayHelper::map($title,'title', 'title');?>

        <?= $form->field($model, 'title_trainings')->dropDownList($items,['class' => 'form-control color'])->label('Выберете название тренинга')?>
    </div>


    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6])->widget(\yii\imperavi\Widget::className(),[
        'options' => [
            'lang' => 'ru',
            'formatting' => array('p', 'blockquote', 'pre', 'h2', 'h3'),
        ],
        'plugins' => [
            'fullscreen',
            'clips'
        ]
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Шаг 2: Фото' : 'Шаг 2: Фото', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
