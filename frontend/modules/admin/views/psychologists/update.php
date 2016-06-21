<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Psychologists */

$this->title = 'Редактировать: ';
$this->params['breadcrumbs'][] = ['label' => 'Психологи', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="psychologists-update">

    <h1><?= Html::encode($model->name) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
