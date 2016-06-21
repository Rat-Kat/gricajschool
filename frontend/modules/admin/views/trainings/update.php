<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Trainings */

$this->title = 'Редактировать тренинг: ';
$this->params['breadcrumbs'][] = ['label' => 'Тренинги', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="trainings-update">

    <h1><?= Html::encode($model->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
