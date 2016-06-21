<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Comentstraining */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Отзывы к тренингам', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comentstraining-view">

   <br><br>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title_trainings',
            'name',
            'text:ntext',
            'created_at',
        ],
    ]) ?>

</div>
