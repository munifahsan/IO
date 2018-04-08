<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model app\models\Tbmahasiswa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbmahasiswa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nim')->textInput(['readonly'=>true]) ?>

    <?= $form->field($model, 'nama')->textInput(['readonly'=>true]) ?>

    <?= $form->field($model, 'id_fak')->textInput(['readonly'=>true]) ?>

    <?= $form->field($model, 'id_prodi')->textInput(['readonly'=>true]) ?>

    <?= $form->field($model, 'kamar')->textInput(['readonly'=>true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['readonly'=>true]) ?>

    <?= $form->field($model, 'semester')->textInput(['readonly'=>true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
