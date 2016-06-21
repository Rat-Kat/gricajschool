
<?php

$this->title = 'Записаться на тренинг или вебинар';

?>

<h3 class="purple text-center margin-0">Записаться на тренинг или вебинар</h3>
<br>

<p class="text-center">Для записи на тренинг или вебинар Вы можете позвонить нам по телефонам:+38 (067) 137-23-18 или +38 (044) 383-61-20
    <br>Или заполнить поля ниже</p>
<br>

<?
$form=\yii\bootstrap\ActiveForm::begin([
    'options'=>['class' => 'col-lg-7 col-md-offset-2']
])
?>
<div class="form-group">

    <? $title= \common\models\Actual::find()->all();?>
    <? $items=\yii\helpers\ArrayHelper::map($title,'title', 'title');?>

    <?= $form->field($model, 'titlestudy')->dropDownList($items,['class' => 'form-control color'])->label('Выберете название тренинга или вебинара')?>
</div>

<div class="form-group">
    <?= $form -> field($model, 'name') -> textInput(['class' => 'form-control'])->label('Ваше имя') ?>
</div>
<div class="form-group">
    <?= $form -> field($model, 'phone') -> textInput([['class' => 'form-control'], ['type'=>'tel']])->label('Ваш номер телефона') ?>
</div>
<div class="form-group">
    <?= $form -> field($model, 'email') -> textInput([['class' => 'form-control'], ['type'=>'email']])->label('Ваш е-mail') ?>
</div>
<div class="form-group">
    <?= $form -> field($model, 'text') -> textarea([['row'=>5], ['class' => 'form-control']])->label('Ваш комментарий (не обязательно)') ?>
</div>
<div class="captcha">
<?= $form->field($model, 'verifyCode')->widget(\yii\captcha\Captcha::className(), [
    'template' => '<div class="row">{image}</div><div class="row">{input}</div>',
    'captchaAction' => \yii\helpers\Url::to(['main/captcha'])
])-> label('Введите, пожалуйста, код') ?>
</div>
<br>
<?= \yii\helpers\Html::submitButton('Отправить заявку', ['class'=>'btn btn-link submit col-md-offset-4 col-xs-offset-2 col-sm-offset-4']) ?>

<?
\yii\bootstrap\ActiveForm::end()
?>
