<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Personal */

$this->title = 'Update Data Karyawan : ' . $model->nama_lengkap;
$this->params['breadcrumbs'][] = ['label' => 'Personals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_personal, 'url' => ['view', 'id' => $model->id_personal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="personal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
