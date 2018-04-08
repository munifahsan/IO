<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tbmahasiswa */

$this->title = 'Update Tbmahasiswa: ' . $model->id_mahasiswa;
$this->params['breadcrumbs'][] = ['label' => 'Tbmahasiswas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_mahasiswa, 'url' => ['view', 'id' => $model->id_mahasiswa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbmahasiswa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
