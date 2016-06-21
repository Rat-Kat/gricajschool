<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = 'Create User';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?
    $form = \yii\bootstrap\ActiveForm::begin([
        'enableClientValidation' => false,
        'enableAjaxValidation' => true,
    ]);
    ?>

    <?
    echo $form->field($model,'username');
    ?>
    <?
    echo $form->field($model,'email');
    ?>
    <?
    echo $form->field($model,'password')->passwordInput();
    ?>
    <?
    echo $form->field($model,'repassword')->passwordInput();
    ?>

    <?
    echo \yii\helpers\Html::submitButton('Register',['class' => 'btn btn-success'])
    ?>


    <?
    \yii\bootstrap\ActiveForm::end();
    ?>

</div>
