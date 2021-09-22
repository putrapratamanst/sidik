<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Peserta */

$this->title = 'Update Peserta: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Peserta', 'url' => ['index', 'type'=> $dataDiklat['type']]];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'type'=> $dataDiklat['type']]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="peserta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
