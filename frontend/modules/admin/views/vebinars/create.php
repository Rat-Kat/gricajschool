<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Vebinars */

$this->title = 'Добавить вебинар';
$this->params['breadcrumbs'][] = ['label' => 'Вебинары', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vebinars-create">

    <br><br>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
