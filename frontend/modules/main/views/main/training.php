<?
$this->title = $model->title;
?>
<div class="text-margin">
    <h3 class="purple text-center"><?=$model->title ?></h3>
    <br>
    <div class="row">
        <?= \yii\bootstrap\Html::img(\yii\helpers\Url::to('@web/uploads/trainings/'.$model->id.'/'.$model->general_image), ['class'=>'img-responsive col-lg-4 col-md-4 col-sm-5 col-xs-12 img', 'alt'=>'']); ?>
        <h4 class="purple">Цель проведения</h4>
        <hr>
        <div><?= $model->goal ?></div>
    </div>
    <br>
    <h4 class="purple">Даты проведения</h4>
    <hr>
    <div class="row">
        <div class="col-lg-3 text-margin"><?=$model->date_next ?></div>
        <div class="btn btn-link submit col-lg-3 col-md-3 col-sm-4 col-xs-12 col-md-offset-4 col-sm-offset-2 col-xs-offset-1">
        <?= \yii\helpers\Html::a('Зарегистрироваться', ['main/aplications'], ['class'=> 'submit-side'])  ?>
        </div>
    </div>
    <br>
    <div><?=$model->main_text ?></div>
    <br>
    <h4 class="purple">Отзывы предыдущих тренингов</h4>
    <hr>

    <? foreach($model->comentstraining as $row): ?>
    <div class="row">
    <div class="col-lg-3">
                <img src="<?=\frontend\components\Common::getImageComentstraining($row)[0]?>" class="img-circle" alt="">
           </div>
        <div class="col-lg-8 bottom">
            <b><?= $row['name'] ?></b>
            <div class="text-margin">
                <?= $row['text'] ?>
            </div>
        </div>
    </div>
    <br>
    <? endforeach; ?>