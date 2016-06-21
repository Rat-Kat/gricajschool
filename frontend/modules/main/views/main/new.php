<?
$this->title = $model->title;
?>

<h3 class="purple text-center"><?=$model->title?></h3>
<br>
<div class="text-margin">
    <?= \yii\bootstrap\Html::img(\yii\helpers\Url::to('@web/uploads/news/'.$model->id.'/'.$model->general_image), ['class'=>'img-responsive col-lg-5 col-md-5 col-sm-6 col-xs-12 img', 'alt'=>'']); ?>

   <div><?=$model->main_text?></div>
</div>