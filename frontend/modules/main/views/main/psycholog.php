<?php

$this->title = $model->name;

?>

<?= \yii\bootstrap\Html::img('@web/img/zvt.png', ['class'=>'img-responsive col-lg-2 col-md-2 col-sm-3 col-xs-4 col-md-offset-3 col-sm-offset-2 zvt zvt-left', 'alt'=>'zvt']); ?>

<div class="main-header col-lg-3 col-md-3 col-sm-4 col-xs-4"><h3>Наши психологи</h3></div>
<?= \yii\bootstrap\Html::img('@web/img/zvt.png', ['class'=>'img-responsive col-lg-2 col-md-2 col-sm-3 col-xs-4 zvt', 'alt'=>'zvt']); ?>
<br>
<br>

<h3 class="purple text-center"><em><?=$model->name ?></em></h3>

<br>

<?= \yii\bootstrap\Html::img(\yii\helpers\Url::to('@web/uploads/psychologists/'.$model->id.'/'.$model->general_image), ['class'=>'img-responsive col-lg-4 col-md-3 col-sm-4 col-xs-12 img', 'alt'=>'']); ?>

<div class="text-margin clearfix">
    <div> <?=$model->about ?> </div>
</div>
<br>
<hr>

<div class="col-lg-8">
    <table>
        <tr>
            <td class="purple border" rowspan="2">Записаться на консультацию:</td>
            <td class="border"> <?=$model->contacts ?></td>
        </tr>


    </table>
</div>