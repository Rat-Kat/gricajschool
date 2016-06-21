<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Trainings */

$this->title = 'Добавить тренинг';
$this->params['breadcrumbs'][] = ['label' => 'Тренинги', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trainings-create">

    <br><br>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
