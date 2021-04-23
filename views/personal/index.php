<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PersonalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Karyawan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="personal-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Personal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel, //INI UNTUK SEARCH
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //BERFUNGSI UNTUK MENGAMBIL FIELD DARI DATABASE
            [
                'header' => 'Nama Lengkap',     // HEADER BISA DIGANTI DENGAN 'label'


                // header ini untuk mengubah yg diatas itu yg judul nya seperti nama lengkap, alamat dll
                //'headerOptions' => ['style'=> 'widht:200px', 'class'=> 'text-center'], 

                // content ini untuk isi table nyaaa
                //'contentOptions' => ['class'=> 'text-center'], 
                'value' => function ($model){
                    return $model->nama_lengkap;
                }
            ], 

            'jenis_kelamin',

            [
                'label' => 'Tanggal Lahir',
                'value' => function ($model){
                    //mengubah format tanggal lahir hari bulan dan tahun
                    //M untuk karakter bulan, m untuk angka bulang
                    return date("d-M-y", strtotime($model->tanggal_lahir));
                }
            ],
            

            'alamat',
            'no_ktp',
            'no_hp',
            'tempat_lahir',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
