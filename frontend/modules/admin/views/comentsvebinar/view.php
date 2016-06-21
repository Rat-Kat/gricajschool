<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Comentsvebinar */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Отзывы к вебинарам', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comentsvebinar-view">

    <h1><?= Html::encode($this->title) ?></h1>

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

            'title_vebinar',
            'name',
            'text:ntext',
            'created_at:date',
        ],
    ]) ?>

</div>
