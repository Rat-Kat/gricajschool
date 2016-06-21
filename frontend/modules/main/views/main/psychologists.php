<?php

$this->title = 'Наши психологи';

?>
<?= \yii\bootstrap\Html::img('@web/img/zvt.png', ['class'=>'img-responsive col-lg-2 col-md-2 col-sm-3 col-xs-4 col-md-offset-3 col-sm-offset-2 zvt zvt-left', 'alt'=>'zvt']); ?>

<div class="main-header col-lg-3 col-md-3 col-sm-4 col-xs-4"><h3>Наши психологи</h3></div>
<?= \yii\bootstrap\Html::img('@web/img/zvt.png', ['class'=>'img-responsive col-lg-2 col-md-2 col-sm-3 col-xs-4 zvt', 'alt'=>'zvt']); ?>
<br>
<br>
<br>
<?
foreach($model as $row):
    ?>
    <article>
        <a href="<?= frontend\components\Common::getUrlPsycholog($row)?>"><h4 class="purple text-center"><?=$row['name'] ?></h4></a>
        <hr>
        <div class="row text-margin">
            <img src="<?=\frontend\components\Common::getImagePsychologists($row)[0]?>" class="img-responsive col-lg-3 psycholog-photo" alt="" >

            <div><?=$row['short_text'] ?></div>

        </div>

    </article>
    <br><br>
           <?
endforeach;
?>


