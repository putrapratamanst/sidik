<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Peserta */

$this->title = "Nama Peserta: " .$model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Peserta', 'url' => ['index', 'type'=> $dataDiklat['type']]];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="peserta-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'type'=> $dataDiklat['type']], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama',
            'nip',
            'unit_kerja',
            'jabatan',
            'tmt_jabatan',
            'type',
        ],
    ]) ?>

</div>
