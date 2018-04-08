<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tbabsen */

$this->title = 'Create Tbabsen';
$this->params['breadcrumbs'][] = ['label' => 'Tbabsens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbabsen-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
