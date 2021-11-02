<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PesertaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Peserta' . " ". $dataDiklat['diklat'];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peserta-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php if (!Yii::$app->user->isGuest) {?>
            <?= Html::a('Tambah Peserta' , ['create', 'type'=> $dataDiklat['type']], ['class' => 'btn btn-success']) ?>
            <?php } ?>
        <?php if ($dataDiklat['type'] == "struktural_pkn" || $dataDiklat['type'] == "struktural_pka" || $dataDiklat['type'] == "struktural_pkp"){ ?>
        <?= Html::a('Filter Peserta '. $dataDiklat['diklat'] , ['list', 'type'=> $dataDiklat['type']], ['class' => 'btn btn-danger']) ?>
        <?php } ?>
    </p>

    <!-- echo $this->render('_search', ['model' => $searchModel]); ?> -->

    <?php if (!Yii::$app->user->isGuest){?>
    
    <?= GridView::widget([
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
            'pangkat',
            //'type',

            ['class' => 'yii\grid\ActionColumn',
            'template' => '{view}',
        ],
        ],
    ]); ?>
    <?php } else {?>
       <?php echo GridView::widget([
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
            ]);?>
        <?php } ?>

</div>
