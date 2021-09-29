<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PesertaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Peserta' . " " . $dataDiklat['diklat'];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peserta-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php
    if ($type == "struktural") { ?>

        <p>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <a class="btn btn-primary" href="/peserta/list?type=fungsional" role="button"> PKN (Pelatihan Kepemimpinan Nasional)</a>
                </div>
                <div class="col-sm">
                    <button class="btn btn-danger" type="button">PKA (Pelatihan Kepemimpinan Administrasi)</button>
                </div>
                <div class="col-sm">
                    <button class="btn btn-secondary" type="button">PKP (Pelatihan Kepemimpinan Pengawas)</button>
                </div>
            </div>
        </div>
        </p>
    <?php
    }
    ?>


    <?php
    if ($type == "fungsional") { ?>

        <p>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <a class="btn btn-primary" href="/peserta/list?type=fungsional" role="button"> Diklat Calon Kepala Sekolah</a>
                </div>
            </div>
        </div>
        </p>
    <?php
    }
    ?>

<?php
    if ($type == "teknis") { ?>
        <p>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <a class="btn btn-primary" href="/peserta/list?type=fungsional" role="button"> Diklat Darurat Bencana</a>
                </div>
                <div class="col-sm">
                    <button class="btn btn-danger" type="button">Diklat Pemadam Kebakaran</button>
                </div>
                <div class="col-sm">
                    <button class="btn btn-secondary" type="button">Diklat Camat</button>
                </div>
            </div>
        </div>
        </p>
    <?php
    }
    ?>

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