<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Psychologists */

$this->title = 'Добавить психолога';
$this->params['breadcrumbs'][] = ['label' => 'Психологи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="psychologists-create">

<br><br>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
