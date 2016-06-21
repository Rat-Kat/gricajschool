<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Actual */

$this->title = 'Редактировать актуальный тренинг или вебинар: ';
$this->params['breadcrumbs'][] = ['label' => 'Актуальный тренинг или вебинар', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="actual-update">

    <h1><?= Html::encode($model->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
