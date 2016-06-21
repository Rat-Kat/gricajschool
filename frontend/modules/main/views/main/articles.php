<?php

$this->title = 'Статьи';

?>

<section>
    <?= \yii\bootstrap\Html::img('@web/img/zvt.png', ['class'=>'img-responsive col-lg-2 col-md-2 col-sm-3 col-xs-4 col-md-offset-3 col-sm-offset-2 zvt zvt-left', 'alt'=>'zvt']); ?>

    <div class="main-header col-lg-2 col-md-2 col-sm-3 col-xs-4 col-md-2"><h3>Статьи</h3></div>
    <?= \yii\bootstrap\Html::img('@web/img/zvt.png', ['class'=>'img-responsive col-lg-2 col-md-2 col-sm-3 col-xs-4 zvt', 'alt'=>'zvt']); ?>

    <br>
    <br>
    <br>
    <?
    foreach($model as $row):
    ?>
    <article>
        <a href="<?= frontend\components\Common:: getUrlArticle($row) ?>"><h4 class="purple text-center"><?=$row['title'] ?></h4></a>
        <hr>
        <div class="row text-margin">
            <img src="<?=\frontend\components\Common::getImageArticles($row)[0]?>" class="img-responsive col-lg-4 col-md-4 col-sm-4 col-xs-6 article" alt="">

            <div><?=$row['short_text'] ?></div>
            <a href="<?= frontend\components\Common::getUrlArticle($row) ?>" class="reading col-lg-3 ">Читать далее...</a>
        </div>
    </article>
    <br>
    <br>
    <?
    endforeach;
    ?>
    <div class="center">
        <? echo \yii\widgets\LinkPager::widget([
            'pagination' => $pages
        ]) ?>
    </div>

</section>