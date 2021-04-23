<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Personal */
/* @var $form yii\widgets\ActiveForm */
?><br>  

<div class="personal-form">
   <div class="col-md-8">
     <div class="card">
       <div class="card-body">
        <?php $form = ActiveForm::begin(); ?>
                  <div class="row">
                    <div class="col-md-5 pr-md-1">
                      <div class="form-group">
                        <?= $form->field($model, 'nama_lengkap')->textInput(['maxlength' => true])?>
                      </div>
                    </div>
                    <div class="col-md-3 px-md-1">
                      <div class="form-group">
                       <?= $form->field($model, 'nama_panggilan')->textInput(['maxlength' => true]) ?>
                      </div>
                    </div>
                    <div class="col-md-4 pr-md-1">
                        <?= $form->field($model, 'jenis_kelamin')->radioList(['laki-laki'=>'laki-laki', 'perempuan'=> 'perempuan']) ?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pl-md-1">
                      <div class="form-group">
                       <?php // $form->field($model, 'tanggal_lahir')->textInput(['']) ?>
                       <?=$form->field($model, 'tanggal_lahir')->widget(DatePicker::classname(), [
                        'options' => ['placeholder' => 'Pilih tanggal lahir ...'],
                        'pluginOptions' => [
                            'autoclose'=>true,
                            'format' => 'dd-M-yyyy'
                        ]
                    ]);?>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <?=
                              $form->field($model, 'status_perkawinan')->widget(Select2::classname(), [
                              'data' => ['Belum Menikah' => 'Belum Menikah', 'Menikah' => 'Menikah', 'Cerai Hidup' => 'Cerai Hidup', 'Cerai Mati' => 'Cerai Mati'],
                              'options' => ['placeholder' => 'Pilih Status ...'],
                              'hideSearch' => true,
                              'pluginOptions' => [
                              'allowClear' => true
                              ],
                          ]);
                        ?>
                      </div>
                    </div>
                    <div class="col-md-4 pr-md-1">
                      <div class="form-group">
                        <?=
                              $form->field($model, 'agama')->widget(Select2::classname(), [
                              'data' => ['Islam' => 'islam', 'Kristen' => 'Kristen', 'Buddha' => 'Buddha', 'Katolik' => 'Katolik', 'Hindu' => 'Hindu', 'Konghucu'=> 'Konghucu'],
                              'options' => ['placeholder' => 'Pilih Agama ...'],
                              'pluginOptions' => [
                              'allowClear' => true
                              ],
                          ]);
                        ?>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4 px-md-1">
                      <div class="form-group">
                       <?=
                              $form->field($model, 'pendidikan')->widget(Select2::classname(), [
                              'data' => ['SMK' => 'SMK', 'SMA' => 'SMA', 'S1' => 'S1', 'S2' => 'S2', 'S3' => 'S3', 'Diploma I' => 'Diploma I', 'Diploma II' => 'Diploma II', 'Diploma III' => 'Diploma III', 'Diploma iv' => 'Diploma IV'],
                              'options' => ['placeholder' => 'Pilih Status ...'],
                              'hideSearch' => true,
                              'pluginOptions' => [
                              'allowClear' => true
                              ],
                          ]);
                        ?>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="form-group">
                        <?= $form->field($model, 'alamat')->textArea(['maxlength' => true]) ?>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <?= $form->field($model, 'no_ktp')->textInput(['maxlength' => true]) ?>
                      </div>
                    </div>
                     <div class="col-md-6">
                      <div class="form-group">
                        <?= $form->field($model, 'no_hp')->textInput(['maxlength' => true]) ?>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                           <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>
                      </div>
                    </div>
                  </div><br>

                     <div class="form-group">
                        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                    </div>

                 <?php ActiveForm::end(); ?>
     </div>
   </div>
</div>
 
      </div>