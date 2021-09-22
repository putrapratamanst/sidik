<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PesertaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Peserta';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peserta-index">

    <h1><?= Html::encode($this->title) . " ". $dataDiklat['diklat'] ?></h1>

    <p>
        <?= Html::a('Tambah Peserta' , ['create', 'type'=> $dataDiklat['type']], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Filter Peserta '. $dataDiklat['diklat'] , ['filter', 'type'=> $dataDiklat['type']], ['class' => 'btn btn-danger']) ?>
    </p>

    <!-- echo $this->render('_search', ['model' => $searchModel]); ?> -->

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'nama',
            'nip',
            'unit_kerja',
            'jabatan',
            'tmt_jabatan',
            //'type',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
