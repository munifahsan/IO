<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tbabsen */

$this->title = $model->id_absen;
$this->params['breadcrumbs'][] = ['label' => 'Tbabsens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbabsen-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_absen], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_absen], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_absen',
            'id_mahasiswa',
            'alasan:ntext',
            'waktu_keluar',
            'waktu_masuk',
            'status',
        ],
    ]) ?>

</div>
