<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Comentstraining */

$this->title = 'Добавить отзыв';
$this->params['breadcrumbs'][] = ['label' => 'Отзывы к тренингам', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comentstraining-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
