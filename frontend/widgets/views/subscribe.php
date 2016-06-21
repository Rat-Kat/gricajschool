
<div class="subscription">
    <? if(Yii::$app->session->hasFlash('message')): ?>
        <p class="text-center"><?= Yii::$app->session->getFlash('message');?></p>
        <?
    endif;
    ?>
    <div class="radius radius-top-left"></div>
    <div class="subscription-top">
        <div class="line subscription-line"></div>
    </div>
    <div class="radius-right">
        <div class="radius radius-top-right"></div>
    </div>
    <div class="subscription-fon">

        <?  $form=\yii\bootstrap\ActiveForm::begin([
            'enableClientValidation' => false,
            'enableAjaxValidation'=>false,
            'options'=>['class' => 'aside-form']
        ])
        ?>
        <div class="form-group">
            <div class="write"><label class="small">Подписаться на рассылку</label></div>
            <?= $form -> field($model, 'email') -> textInput(['placeholder' => 'Ваш email', 'class' => 'form-control input-sm question-input', 'type' => 'email'])->label(false) ?>
        </div>

        <div class="button">
            <?=\yii\helpers\Html::submitButton('Подписаться', ['class'=>'btn btn-default']) ?>
        </div>
        <?
        \yii\bootstrap\ActiveForm::end()
        ?>


    </div>

    <div class="radius radius-button-left"></div>
    <div class="subscription-button">
        <div class="line subscription-line"></div>
    </div>
    <div class="radius-right">
        <div class="radius radius-button-right"></div>
    </div>
</div>




