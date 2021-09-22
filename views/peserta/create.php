<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\Models\Peserta */

$this->title = 'Tambah Peserta '. $dataDiklat['diklat'];
$this->params['breadcrumbs'][] = ['label' => 'Peserta', 'url' => ['index', 'type'=> $dataDiklat['type']]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peserta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
