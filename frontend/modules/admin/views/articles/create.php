<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Articles */

$this->title = 'Добавить статью';
$this->params['breadcrumbs'][] = ['label' => 'Статьи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="articles-create">

<br><br>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
