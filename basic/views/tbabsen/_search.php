<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbabsenSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbabsen-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_absen') ?>

    <?= $form->field($model, 'id_mahasiswa') ?>

    <?= $form->field($model, 'alasan') ?>

    <?= $form->field($model, 'waktu_keluar') ?>

    <?= $form->field($model, 'waktu_masuk') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
