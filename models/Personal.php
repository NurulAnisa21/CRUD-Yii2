<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "personal".
 *
 * @property int $id_personal
 * @property string $nama_lengkap
 * @property string $nama_panggilan
 * @property string $jenis_kelamin
 * @property string $tanggal_lahir
 * @property string $status_perkawinan
 * @property string $agama
 * @property string $pendidikan
 * @property string $alamat
 * @property string $no_ktp
 * @property string $no_hp
 * @property string $email
 * @property string $tempat_lahir
 *
 * @property Pegawai[] $pegawais
 */
class Personal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'personal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_lengkap', 'nama_panggilan', 'jenis_kelamin', 'tanggal_lahir', 'status_perkawinan', 'agama', 'pendidikan', 'alamat', 'no_ktp', 'no_hp', 'email', 'tempat_lahir'], 'required'],
            [['tanggal_lahir'], 'safe'],
            [['nama_lengkap', 'alamat'], 'string', 'max' => 50],
            [['nama_panggilan', 'status_perkawinan', 'no_ktp'], 'string', 'max' => 20],
            [['jenis_kelamin'], 'string', 'max' => 15],
            [['agama'], 'string', 'max' => 10],
            [['pendidikan', 'email', 'tempat_lahir'], 'string', 'max' => 30],
            [['no_hp'], 'string', 'max' => 16],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_personal' => 'Id Personal',
            'nama_lengkap' => 'Nama Lengkap',
            'nama_panggilan' => 'Nama Panggilan',
            'jenis_kelamin' => 'Jenis Kelamin',
            'tanggal_lahir' => 'Tanggal Lahir',
            'status_perkawinan' => 'Status Perkawinan',
            'agama' => 'Agama',
            'pendidikan' => 'Pendidikan',
            'alamat' => 'Alamat',
            'no_ktp' => 'No Ktp',
            'no_hp' => 'No Hp',
            'email' => 'Email',
            'tempat_lahir' => 'Tempat Lahir',
        ];
    }

    /**
     * Gets query for [[Pegawais]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPegawais()
    {
        return $this->hasMany(Pegawai::className(), ['id_personal' => 'id_personal']);
    }
}
