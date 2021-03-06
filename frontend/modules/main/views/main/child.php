<?php

$this->title = 'Детский кабинет. Родители и дети';

?>
    <div class="row row-header">
        <?= \yii\bootstrap\Html::img('@web/img/zvt.png', ['class'=>'img-responsive col-lg-2 col-md-2 col-sm-3 col-xs-4 col-md-offset-3 col-sm-offset-2 zvt zvt-cabinets zvt-left', 'alt'=>'zvt']); ?>
        <div class="main-header col-lg-3 col-md-3 col-sm-4 col-xs-4 "><h3>Детский кабинет. Родители и дети</h3></div>
        <?= \yii\bootstrap\Html::img('@web/img/zvt.png', ['class'=>'img-responsive col-lg-2 col-md-2 col-sm-3 col-xs-4 zvt zvt-cabinets', 'alt'=>'zvt']); ?>

    </div>
    <br>
    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-6">
        <?= \yii\bootstrap\Html::img('@web/img/child3.jpg', ['class'=>'img-responsive img', 'alt'=>'']); ?>
    </div>
    <div class="text-margin text-indent">
        <p>Быть родителем – драгоценный опыт и одно из самых благодарных дел в вашей жизни, но никто не скажет, что это просто. Независимо от того, сколько лет вашему ребенку или детям, вы никогда не можете считать свою задачу выполненной до конца. Чтобы быть хорошей матерью или отцом, необходимо знать, как это делается. Но, к сожалению, этому нас никто не учил. Мы можем опираться только на опыт наших родителей или примеры, которые наблюдаем в жизни. А они порой не всегда качественные.</p>
        <p>Зачем психолог детям? Дело в том, что ребёнку ещё не хватает жизненного опыта и знаний, чтобы понимать, почему он испытывает различные дискомфортные состояния: грусть, раздражение, страх, панику. Да он и не всегда может их определить и назвать. И если это становится проблемой, на помощь приходит психолог. С детьми дошкольного и младшего школьного возраста психолог играет. Прежде чем рассказывать об игре, надо отметить, что общение с ребёнком у психолога начинается с того, что устанавливается контакт с его мамой или папой. Других вариантов нет. Ведь родитель для ребёнка – постоянный и значимый человек. А психолог может стать временным полезным попутчиком.</p>
        <p>В подростковом возрасте любой ребенок неизбежно столкнется с кризисом в своем восприятии окружающей действительности и смысла жизни. Подросток лишь входит в мир взрослых и это может его пугать, заставлять отступать в детство или наоборот бросаться сломя голову вперед.</p>
        <p><b>Причины для похода к психологу:</b></p>
        <ul class="no-text-indent">
            <li>резкие, необъяснимые перепады настроения, неоправданные страхи, злость и агрессия</li>
            <li>повышенная активность (гиперактивность)</li>
            <li>расстройство сна – частые кошмары, беспокойство, боязнь спать одному, затруднение в утреннем пробуждении</li>
            <li>трудности в обучении – ребенку сложно привыкнуть к детскому саду, плохо адаптируется в школе</li>
            <li>всевозможные психологические травмы – смена школы, пополнение в семье, гибель близкого человека или домашнего любимца, расставание родителей
                - симптомы психического расстройства</li>
            <li>заикание, нервный тик, недержание мочи. В эту категорию можно отнести и ослабление иммунной системы ребенка, постоянные простуды, хроника (аллергии, астма или тонзиллит)</li>

        </ul>
        <p>Немаловажным фактором, влияющим на становление личности ребенка, является психологический климат в семье, отношения, которые наблюдает ребенок, между родителями, старшими детьми и родственниками. Поэтому, решаясь отвести ребенка к психологу, будьте готовы к тому, что потребуется участие всей вашей семьи. Психолог должен рассмотреть все факторы, влияющие на поведение ребенка, включая манеру и стиль воспитания у родителей.</p>
        <br>
        <hr>

        <div class="col-lg-8">
            <table>
                <tr class="tr-top">
                    <td class="purple border">Стоимость консультации:</td>
                    <td class="border" colspan="2"><?= $model->child ?>грн за 1 час</td>
                </tr>
                <tr>
                    <td class="purple border" rowspan="4">Записаться на консультацию:</td>
                    <td class="border" rowspan="2"> тел.</td>
                    <td class="border"> +38(067) 137-23-18</td>
                </tr>
                <tr class="table-conacts">
                    <td class="border">+38 (044) 383-61-20</td>
                </tr>
                <tr class="table-conacts ">
                    <td class="border">Skype</td>
                    <td class="border ">some name</td>
                </tr>
                <tr class="table-conacts">
                    <td class="border ">E-mail</td>
                    <td class="border">ksysha-gricaj@yandex.ru</td>
                </tr>
            </table>
        </div>
    </div>
