<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;


/* @var $this yii\web\View */
/* @var $model app\models\Peserta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="peserta-form">

    <?php
    if ($model->isNewRecord) { ?>

        <?php $form = ActiveForm::begin(); ?>

        <!-- $form->field($model, 'type')->textInput(['maxlength' => true])->label("Nama Diklat") ?> -->

        <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'nip')->textInput(["type" => 'number']) ?>

        <?= $form->field($model, 'unit_kerja')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'pangkat')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'jabatan')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'tmt_jabatan')->widget(DatePicker::className(), ['dateFormat' => 'yyyy-MM-dd']) ?>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    <?php } else { ?>
        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

        <!-- $form->field($model, 'type')->textInput(['maxlength' => true])->label("Nama Diklat") ?> -->

        <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'nip')->textInput(["type" => 'number']) ?>

        <?= $form->field($model, 'unit_kerja')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'pangkat')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'jabatan')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'tmt_jabatan')->widget(DatePicker::className(), ['dateFormat' => 'yyyy-MM-dd']) ?>

        <?= $form->field($model, 'sk')->fileInput() ?>
        <?php 
        if ($model->sk != "") {
            echo "File SK saat ini:" . Html::a($model->sk, Url::to('@web/uploads/' . $model->sk), ['target' => '_blank']); 
        } ?>
        <br>
        <br>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    <?php } ?>

</div>