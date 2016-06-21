<?php

$this->title = 'Вебинары';

?>

<div class="row row-header">
    <?= \yii\bootstrap\Html::img('@web/img/zvt.png', ['class'=>'img-responsive col-lg-2 col-md-2 col-sm-3 col-xs-4 col-md-offset-3 col-sm-offset-2 zvt zvt-left', 'alt'=>'zvt']); ?>
    <div class="main-header col-lg-2 col-md-2 col-sm-4 col-xs-4 "><h3>Вебинары</h3></div>
    <?= \yii\bootstrap\Html::img('@web/img/zvt.png', ['class'=>'img-responsive col-lg-2 col-md-2 col-sm-3 col-xs-4 zvt', 'alt'=>'zvt']); ?>
</div>
<br>
<div class=" text-margin text-indent">
    <?= \yii\bootstrap\Html::img('@web/img/vebinars.jpg', ['class'=>'img-responsive col-lg-5 col-md-5 col-sm-6 col-xs-12', 'alt'=>'']); ?>
    <p>В нашей Школе психологии Ксении Грицай очень популярным стало проведение вебинаров, как нового и очень удобного способа общения с другими людьми и получения знаний.</p>
    <p>Что такое вебинар?</p>
    <p>Вебинар - это своего рода семинар в Интернете, который в большинстве случаев проходит в режиме реального времени. Вебинар можно назвать не только семинаром, но и лекцией, или конференцией. В нашей школе вебинар объединяет людей с разных стран и континентов, которые с помощью Интернета и специального разработанного компьютерного обеспечения держат связь между собой.</p>
    <p>Какие возможности вебинара?</p>
    <p>Вебинар имеет цель, например, обучения или консультации. Как правило, ведет семинар один человек, которого видно на видео, а другие участники смотрят на него, слушают, задают вопросы в специальном чате. Вебинар записывается, чтобы потом его можно было пересмотреть или выложить в свободный доступ участникам. </p>
    <p>В процессе семинара ведущий использует наглядные материалы, документы, презентации или демонстрирует рабочий стол своего компьютера. Это очень важно, ведь человек намного лучше воспринимает именно наглядные материалы. Часто ведущие запускают презентацию под звуковое сопровождение, чтобы настроить людей на восприятие информации. Если в процессе семинара планируется показывать видео, то нужно удостовериться, что у всех участников есть хороший Интернет. </p>
    <p>Стандартный вебинар  длится от одного до двух часов, но время проведения может варьироваться в зависимости от его цели и типа. </p>
</div>
<br>
<section>
    <h3 class="center">Вебинары, которые мы проводим</h3>
    <br>

    <?
    foreach($model as $row):
        ?>
        <article class="bottom">
            <a href="<?= frontend\components\Common::getUrlVebinar($row) ?>"><h4 class="purple text-center"><?=$row['title']?></h4></a>
            <hr>
            <div class="row ">

                <img src="<?=\frontend\components\Common::getImageVebinars($row)[0]?>" class="img-responsive col-lg-3 col-md-4 col-sm-5 col-xs-12 img-small" alt="">
                <div class="col-md-8 col-sm-7 col-xs-12">
                    <p><?=$row['goal']?></p>
                    <p><b><u>Даты проведения</u> -</b> <?=$row['date_next']?></p>
                    <p><b><u>Стоимость участия</u> -</b> <?=$row['price']?></p>
                </div>

            </div>
            <br>
            <div class="row ">
                <a class="btn btn-link submit col-md-offset-2 col-xs-offset-2 col-sm-offset-4" href="<?= frontend\components\Common::getUrlVebinar($row) ?>">
                    <div class="submit-side">Подробнее</div>
                </a>
                <div class="btn btn-link submit col-md-offset-3 col-xs-offset-2 col-sm-offset-4">
                    <?= \yii\helpers\Html::a('Зарегистрироваться', ['main/aplications'], ['class'=> 'submit-side'])  ?>
                </div>
            </div>
        </article>
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