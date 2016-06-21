<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Psychologists */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Психологи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="psychologists-view">

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
            'name',
            'general_image',
            'short_text:ntext',
            'about:ntext',
            'email:email',
            'phone',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
