<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Actual */

$this->title = 'Добавить тренинг или вебинаа';
$this->params['breadcrumbs'][] = ['label' => 'Актуальные тренинги и вебинары', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="actual-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
