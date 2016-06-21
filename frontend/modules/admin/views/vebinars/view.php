<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Vebinars */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Vebinars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vebinars-view">

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
            'title',
            'goal:ntext',
            'date_next',
            'main_text:ntext',
            
        ],
    ]) ?>

</div>
