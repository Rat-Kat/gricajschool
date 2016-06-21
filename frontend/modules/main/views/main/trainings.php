<?php

$this->title = 'Групповые тренинги';

?>
<div class="row row-header">
    <?= \yii\bootstrap\Html::img('@web/img/zvt.png', ['class'=>'img-responsive col-lg-2 col-md-2 col-sm-3 col-xs-4 col-md-offset-3 col-sm-offset-2 zvt zvt-left', 'alt'=>'zvt']); ?>
    <div class="main-header col-lg-3 col-md-3 col-sm-4 col-xs-4 "><h3>Групповые тренинги</h3></div>
    <?= \yii\bootstrap\Html::img('@web/img/zvt.png', ['class'=>'img-responsive col-lg-2 col-md-2 col-sm-3 col-xs-4 zvt', 'alt'=>'zvt']); ?>
</div>
<br>
<div class=" text-margin text-indent">
    <?= \yii\bootstrap\Html::img('@web/img/trainings.jpg', ['class'=>'img-responsive col-lg-5 col-md-5 col-sm-6 col-xs-12', 'alt'=>'trainings']); ?>
    <p>Говоря о практической психологии, нельзя обойти такую её разновидность, как групповая психотерапия. Для человека, столкнувшегося с трудностями в личной жизни, в воспитании, переживающего тяжёлое эмоциональное состояние, большой поддержкой может стать группа, в которой есть единомышленники со сходными интересами и  проблемами. Во-первых, есть возможность разделить с кем-то свои переживания под руководством опытного психолога. Во-вторых, здесь можно получить бесценный социальный опыт.</p>
    <p>Третье и, может быть, самое важное – появляется возможность понять, что вы не одиноки в своей беде, такие же сложности возникают у многих. Эти сложности не абстрактные, вы слышите, как реальные люди делятся ими. И вы можете их поддержать и высказать своё мнение. Быть полезным другому – хорошее средство как для этого другого, так и для повышения собственной самооценки. В группе вы получаете колоссальную эмоциональную поддержку и внимание всех и каждого.</p>
    <p>Таким образом, именно практическая психология может разорвать замкнутый круг проблем, облегчить эмоциональное напряжение, помочь осознать себя в жизни, укрепить и направить силы (а они есть у каждого) в конструктивное русло. Основная цель практического психолога – создать условия для решения жизненных проблем, а направление и способ действия человек всегда выбирает сам.</p>
    <p>Современные тренинги личностного роста дают шанс человеку изменить свой характер в лучшую сторону, а также поверить в собственные силы для достижения сложнейших поставленных задач как в бизнесе, так и в личной жизни.</p>
    <p>После прохождения тренинга личностного роста у человека появляются возможности и желания качественно и в корне изменить свою жизнь и устремиться к новым свершениям, причем в абсолютно любом возрасте. Подобный тренинг дает шанс почувствовать себя гармоничной, целостной личностью, что является важным фактором для любого человека.</p>
</div>
<br>
<section>
    <h3 class="center">Тренинги, которые мы проводим</h3>
    <br>

        <?
        foreach($model as $row):
        ?>
            <article class="bottom">
            <a href="<?= frontend\components\Common::getUrlTraining($row) ?>"><h4 class="purple text-center"><?=$row['title']?></h4></a>
            <hr>
            <div class="row ">
                <img src="<?=\frontend\components\Common::getImageTrainings($row)[0]?>" class="img-responsive col-lg-4 col-md-4 col-sm-5 col-xs-12 img-small">
                <div class="col-md-8 col-sm-7 col-xs-12">
                    <p><?=$row['goal']?></p><br>
                        <p><b><u>Даты проведения</u> -</b> <?=$row['date_next']?></p>
                        <p><b><u>Стоимость участия</u> -</b> <?=$row['price']?></p>
                </div>
            </div>
            <br>
            <div class="row ">
                <a class="btn btn-link submit col-md-offset-2 col-xs-offset-2 col-sm-offset-4" href="<?= frontend\components\Common::getUrlTraining($row) ?>">
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