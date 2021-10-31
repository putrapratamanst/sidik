<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Peserta */

$this->title = "Nama Peserta: " . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Peserta', 'url' => ['index', 'type' => $model->type]];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="peserta-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php if (!Yii::$app->user->isGuest) { ?>

            <?= Html::a('Kembali', ['index', 'type' => $model->type], ['class' => 'btn btn-success']) ?>
        <?php } else { ?>
            <?= Html::a('Kembali', ['list', 'type' => $model->type], ['class' => 'btn btn-success']) ?>
        <?php } ?>
            <?= Html::a('Update', ['update', 'id' => $model->id, 'type' => $model->type], ['class' => 'btn btn-primary']) ?>

    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id',
            'nip',
            'nama',
            'unit_kerja',
            'jabatan',
            'pangkat',
            'tmt_jabatan',
            [
                'attribute' => 'sk',
                'format' => 'raw',
                'value' => Html::a($model->sk, Url::to('@web/uploads/' . $model->sk), ['target' => '_blank']),
            ],
        ],
    ]) ?>

</div>