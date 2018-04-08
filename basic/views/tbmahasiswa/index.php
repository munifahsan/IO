<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbmahasiswaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbmahasiswas';
$this->params['breadcrumbs'][] = $this->title;
$this->params['breadcrumbs'][] = ['label' => $model->id_mahasiswa, 'url' => ['view', 'id' => $model->id_mahasiswa]];
?>
<div class="tbmahasiswa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $model]); ?>
    <h1><?=$pesan;?></h1>
    <!-- <p>
        <?/*= Html::a('Create Tbmahasiswa', ['create'], ['class' => 'btn btn-success'])*/ ?>
    </p> -->

  </div>
<?php echo $pesan ?>
  <div class="tbmahasiswa-update">

      <h1><?= Html::encode($this->title) ?></h1>

      <?= $this->render('_formindex', [
          'model' => $model,
      ]) ?>

  </div>
