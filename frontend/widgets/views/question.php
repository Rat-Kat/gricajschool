<div class="question">
    <div class="radius radius-top-left"></div>
    <div class="subscription-top">
        <div class="line subscription-line"></div>
    </div>
    <div class="radius-right">
        <div class="radius radius-top-right"></div>
    </div>
    <div class="question-fon">
        <?
        $form=\yii\bootstrap\ActiveForm::begin([
            'enableClientValidation' => false,
            'enableAjaxValidation'=>false,

            'options'=>['class' => 'aside-form']
        ])
        ?>
        <div class="form-group">
            <div class="write"><label class="small">Задать вопрос</label></div>
            <?= $form -> field($model, 'name') -> textInput(['placeholder' => 'Ф. И. О.', 'class' => 'form-control input-sm question-input'])->label(false) ?>
            <?= $form -> field($model, 'email') -> textInput(['placeholder' => 'Ваш email', 'class' => 'form-control input-sm question-input', 'type' => 'email'])->label(false) ?>
            <?= $form -> field($model, 'text') -> textarea(['placeholder' => 'Ваш вопрос','rows'=>'3', 'class' => 'form-control'])->label(false) ?>
        </div>
        <div class="button">
            <?= \yii\helpers\Html::submitButton('Отправить', ['class'=>'btn btn-default']) ?>
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


