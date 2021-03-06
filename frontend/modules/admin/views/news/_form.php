<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'short_text')->textarea(['rows' => 6])->widget(\yii\imperavi\Widget::classname(),[
        'options' => [
            'lang' => 'ru',
            'formatting' => array('p', 'blockquote', 'pre', 'h2', 'h3'),
        ],
        'plugins' => [
            'fullscreen',
            'clips'
        ]
    ]); ?>

    <?= $form->field($model, 'main_text')->textarea(['rows' => 6])->widget(\yii\imperavi\Widget::classname(),[
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
        <?= Html::submitButton($model->isNewRecord ? 'Шаг 2: Изображение' : 'Шаг 2: Изображение', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
