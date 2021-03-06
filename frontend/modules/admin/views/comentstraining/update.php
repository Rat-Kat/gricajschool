<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Comentstraining */

$this->title = 'Редактировать отзыв: ';
$this->params['breadcrumbs'][] = ['label' => 'Отзывы к тренингам', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="comentstraining-update">

    <h1><?= Html::encode($model->name) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
