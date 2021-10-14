<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;


/* @var $this yii\web\View */
/* @var $model app\models\Peserta */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Upload SK';
$this->params['breadcrumbs'][] = ['label' => 'Peserta', 'url' => ['list', 'type'=> $model->type]];
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="peserta-form">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(['action' =>['upload', 'id' => $model->id], 'method' => 'post'],['options' => ['enctype' => 'multipart/form-data']]); ?>


    <?= $form->field($model, 'sk')->fileInput()->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>