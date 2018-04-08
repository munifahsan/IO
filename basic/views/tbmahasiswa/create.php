<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tbmahasiswa */

$this->title = 'Create Tbmahasiswa';
$this->params['breadcrumbs'][] = ['label' => 'Tbmahasiswas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbmahasiswa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
