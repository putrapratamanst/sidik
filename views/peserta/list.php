<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

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
                    <a class="btn btn-primary" href="/peserta/index?type=struktural_pkn" role="button"> PKN (Pelatihan Kepemimpinan Nasional)</a>
                </div>
                <div class="col-sm">
                    <a class="btn btn-danger" href="/peserta/index?type=struktural_pka" role="button">PKA (Pelatihan Kepemimpinan Administrator)</a>
                </div>
                <div class="col-sm">
                    <a class="btn btn-secondary" href="/peserta/index?type=struktural_pkp" role="button">PKP (Pelatihan Kepemimpinan Pengawas)</a>
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
                    <a class="btn btn-primary" href="/peserta/index?type=fungsional_kepsek" role="button"> Diklat Calon Kepala Sekolah</a>
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
                    <a class="btn btn-primary" href="/peserta/index?type=teknis_bencana" role="button"> Diklat Darurat Bencana</a>
                </div>
                <div class="col-sm">
                    <a class="btn btn-danger" href="/peserta/index?type=teknis_kebakaran" role="button">Diklat Pemadam Kebakaran</a>
                </div>
                <div class="col-sm">
                    <a class="btn btn-secondary" href="/peserta/index?type=teknis_camat" role="button">Diklat Camat</a>
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
                        'buttons' => [
                            'view' => function ($url, $model) {
                                $url = Url::to(['peserta/view', 'id' => $model->id]);
                               return Html::a('<svg aria-hidden="true" style="display:inline-block;font-size:inherit;height:1em;overflow:visible;vertical-align:-.125em;width:1.125em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M573 241C518 136 411 64 288 64S58 136 3 241a32 32 0 000 30c55 105 162 177 285 177s230-72 285-177a32 32 0 000-30zM288 400a144 144 0 11144-144 144 144 0 01-144 144zm0-240a95 95 0 00-25 4 48 48 0 01-67 67 96 96 0 1092-71z"></path></svg>', $url, ['title' => 'view']);
                            },
                         ]
                    ],
                ],
            ]);
        }
    }
    ?>
</div>  