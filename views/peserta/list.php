<?php

use yii\helpers\Html;
use yii\grid\GridView;
// use kartik\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel app\models\PesertaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Peserta' . " " . $dataDiklat['diklat'];
$this->params['breadcrumbs'][] = $this->title;
$list = "list";
$kembali = "";

if (!Yii::$app->user->isGuest) {
    $list = "index";
    if ($type == "fungsional_kepsek") {
        $kembali = "fungsional_kepsek";
    }
    if ($type == "struktural_pkn") {
        $kembali = "struktural_pkn";
    }
    if ($type == "struktural_pka") {
        $kembali = "struktural_pka";
    }
    if ($type == "struktural_pkp") {
        $kembali = "struktural_pkp";
    }
    if ($type == "teknis_bencana") {
        $kembali = "teknis_bencana";
    }
    if ($type == "teknis_kebakaran") {
        $kembali = "teknis_kebakaran";
    }
    if ($type == "teknis_camat") {
        $kembali = "teknis_camat";
    }

} else {
    if ($type == "fungsional_kepsek") {
        $kembali = "fungsional";
    }
    if ($type == "struktural_pkn") {
        $kembali = "struktural";
    }
    if ($type == "struktural_pka") {
        $kembali = "struktural";
    }
    if ($type == "struktural_pkp") {
        $kembali = "struktural";
    }
    if ($type == "teknis_bencana") {
        $kembali = "teknis";
    }
    if ($type == "teknis_kebakaran") {
        $kembali = "teknis";
    }
    if ($type == "teknis_camat") {
        $kembali = "teknis";
    }
}
?>
<div class="peserta-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php
    if ($type != "struktural" && $type != "fungsional" && $type != "teknis") {
    ?>
        <?= Html::a('<i class="fas fa-angle-double-left"></i>Kembali', [$list, 'type' => $kembali], ['class' => 'btn btn-success']) ?>
    <?php } ?>
    <?php
    if ($type == "struktural") { ?>

        <p>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <a class="btn btn-primary" href="/peserta/list?type=struktural_pkn" role="button"> PKN (Pelatihan Kepemimpinan Nasional)</a>
                </div>
                <div class="col-sm">
                    <a class="btn btn-danger" href="/peserta/list?type=struktural_pka" role="button">PKA (Pelatihan Kepemimpinan Administrasi)</a>
                </div>
                <div class="col-sm">
                    <a class="btn btn-secondary" href="/peserta/list?type=struktural_pkp" role="button">PKP (Pelatihan Kepemimpinan Pengawas)</a>
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
                    <a class="btn btn-primary" href="/peserta/list?type=fungsional_kepsek" role="button"> Diklat Calon Kepala Sekolah</a>
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
                    <a class="btn btn-primary" href="/peserta/list?type=teknis_bencana" role="button"> Diklat Darurat Bencana</a>
                </div>
                <div class="col-sm">
                    <a class="btn btn-danger" href="/peserta/list?type=teknis_kebakaran" role="button">Diklat Pemadam Kebakaran</a>
                </div>
                <div class="col-sm">
                    <a class="btn btn-secondary" href="/peserta/list?type=teknis_camat" role="button">Diklat Camat</a>
                </div>
            </div>
        </div>
        </p>
    <?php
    }
    ?>
    <?php if (Yii::$app->user->isGuest) {
        if ($type != "teknis" && $type != "struktural" && $type != "fungsional") {
            echo GridView::widget([
                'dataProvider' => $dataProvider,
                // 'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    // 'id',
                    'nama',
                    'nip',
                    'unit_kerja',
                    'jabatan',
                    'tmt_jabatan',
                    [
                        'class' => 'yii\grid\ActionColumn',
                        'template' => '{formupload}',
                        'buttons' => [
                            'formupload' => function ($url, $model) {
                                return Html::a('Upload SK', $url, [
                                    'title' => Yii::t('app', 'lead-view'),
                                ]);
                            },
                        ],
                        'urlCreator' => function ($action, $model, $key, $index) {
                            if ($action === 'formupload') {
                                $url = '/peserta/formupload/' . $model->id;
                                return $url;
                            }
                        }
                    ],
                ],
            ]);
        }
    } else {
        if ($type != "teknis" && $type != "struktural" && $type != "fungsional") {
            echo Html::a('Download', ['export', 'type' => $dataDiklat['type']], ['class' => 'btn btn-warning']);

            echo GridView::widget([
                'dataProvider' => $dataProvider,
                // 'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    // 'id',
                    'nama',
                    'nip',
                    'unit_kerja',
                    'jabatan',
                    'tmt_jabatan',
                    [
                        'class' => 'yii\grid\ActionColumn',
                        'template' => '{view}',
                    ],
                ],
            ]);
        }
    }
    ?>
</div>