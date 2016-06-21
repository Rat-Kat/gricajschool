<?php

use yii\widgets\LinkPager;

$this->title = 'Школа психологии Ксении Грицай';

?>

<div class="text-margin">
    <h3 class="center margin-0">Добро пожаловать в Школу психологии Ксении Грицай!</h3>
    <br>
    <?= \yii\bootstrap\Html::img('@web/img/index_photo.jpg', ['class'=>'img-responsive col-lg-4 col-md-4 col-sm-12 col-xs-12', 'alt'=>'Kseniya Gricaj']); ?>

    <p class="text-indent">В жизни каждого человека бывают периоды, когда он чувствует себя прекрасно, когда у него крылья за спиной. А иногда, наоборот, испытывает глубокую неудовлетворённость. И если эти колебания в пределах нормы, то взрослый человек справляется с ними сам. Но если одна неприятность, другая, к ним добавляется третья, самооценка падает в пропасть – тогда нужна наша помощь.</p>
    <p class="text-indent">Поддержка нужна, так как человек попадает в плен собственных рассуждений, может погрязнуть в умственной жвачке и перемалывает одно и то же. Порой просто не хватает взгляда со стороны. Нашим специалистам известны определённые способы оценки ситуации. Зачем изобретать велосипед и наступать на одни и те же грабли? Если в результате консультации вы сможете увидеть направление, в котором надо развиваться, это сэкономит вам время и силы.</p>
    <p class="text-indent">Задумайтесь о том, что мы очень хорошо  научились заботиться о своем теле, соблюдаем гигиену, лечим его, ухаживаем. Если возникают проблемы, то мы принимаем меры и сразу же обращаемся к специалисту за рекомендациями. Но почему же тогда, если возникают трудности во взаимоотношениях с другими людьми  или  сложные душевные переживания, то мы пытаемся решить сами? Почему забота о  психике  уходит на второй, а чаще и на последний план? Это не правильно. Когда есть предписание идти к психотерапевту, то это значит, что многое уже упущено. К психологу нужно ходить для профилактики заболеваний.  Для некоторого сопровождения человека с его чувствами и переживаниями. Качество жизни, в таком случае значительно повышается.</p>

</div>
<section class="news">

    <div class="row row-header">
        <?= \yii\bootstrap\Html::img('@web/img/zvt.png', ['class'=>'img-responsive col-lg-2 col-md-2 col-sm-3 col-xs-4 col-md-offset-3 col-sm-offset-2 zvt zvt-left', 'alt'=>'zvt']); ?>
        <div class="main-header col-lg-2 col-md-2 col-sm-3 col-xs-4 col-md-2"><h3>Новости</h3></div>
        <?= \yii\bootstrap\Html::img('@web/img/zvt.png', ['class'=>'img-responsive col-lg-2 col-md-2 col-sm-3 col-xs-4 zvt', 'alt'=>'zvt']); ?>
    </div>
    <br>


    <?
    foreach($model as $row):

    ?>
    <div class="text-margin">
        <div class="row">
            <div class="row">
                <a class="purple col-lg-9 col-md-8 col-sm-12 col-xs-12" href="<?= frontend\components\Common::getUrlNews($row) ?>"><?=$row['title'] ?></a>
                <p class="small col-lg-2 col-md-2 col-sm-12 col-xs-12"><?= Yii::$app->formatter->asDate($row['created_at'],'php:d.m.Y') ?></p>
            </div>
            <hr class="col-lg-11 col-md-11 col-xs-12 col-sm-12">
            <div class="col-lg-11 col-md-11 col-xs-12 col-sm-12">

                <img src="<?=\frontend\components\Common::getImageNews($row)[0]?>" class="img-responsive col-lg-3 col-md-4 col-sm-12 col-xs-12" alt="img">
                <div><?=$row['short_text'] ?></div>
            </div>
        </div>
    </div>
    <br><br>
    <?
    endforeach;
    ?>

    <div class="center">
        <? echo \yii\widgets\LinkPager::widget([
            'pagination' => $pages
        ]) ?>
    </div>
</section>