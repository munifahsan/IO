<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbabsenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbabsens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbabsen-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbabsen', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_absen',
            'id_mahasiswa',
            'alasan:ntext',
            'waktu_keluar',
            'waktu_masuk',
            // 'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
