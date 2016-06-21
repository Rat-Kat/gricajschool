<?
$this->title = 'Добавить статью: шаг 2';
$this->params['breadcrumbs'][] = ['label' => 'Статьи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="articles-create">

    <br><br>
<?php $form = \yii\bootstrap\ActiveForm::begin(); ?>

    <div class="col-offset-1 col-lg-10">
        <?
        echo $form->field($model, 'general_image')->widget(\kartik\file\FileInput::className(),[
            'language' => 'ru',
            'options' => [
                'accept' => 'image/*',
            ],
            'pluginOptions' => [
                'uploadUrl' => \yii\helpers\Url::to(['file-upload-general']),
                'uploadExtraData' => [
                    'id' => $model->id,
                ],
                'allowedFileExtensions' =>  ['jpg', 'png','gif'],
                'initialPreview' => $image,
                'showUpload' => true,
                'showRemove' => true,
                'dropZoneEnabled' => false
            ]
        ]);
        ?>
    </div>
<br>

    <div class="form-group col-lg-3">
        <?= \yii\helpers\Html::submitButton($model->isNewRecord ? 'Сохранить' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

<?php \yii\bootstrap\ActiveForm::end(); ?>
    </div>
