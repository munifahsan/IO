<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbmahasiswa".
 *
 * @property integer $id_mahasiswa
 * @property string $nim
 * @property string $nama
 * @property integer $id_fak
 * @property integer $id_prodi
 * @property string $kamar
 * @property string $alamat
 * @property integer $semester
 */
class Tbmahasiswa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbmahasiswa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'kamar', 'alamat'], 'required'],
            [['nim', 'id_fak', 'id_prodi', 'semester'], 'integer'],
            [['alamat'], 'string'],
            [['nama'], 'string', 'max' => 30],
            [['kamar'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_mahasiswa' => 'Id Mahasiswa',
            'nim' => 'Nim',
            'nama' => 'Nama',
            'id_fak' => 'Id Fak',
            'id_prodi' => 'Id Prodi',
            'kamar' => 'Kamar',
            'alamat' => 'Alamat',
            'semester' => 'Semester',
        ];
    }
    public function getIsiProdi(){
        return $this->hasOne(Prodi::className(),['id_prodi'=>'id_prodi']);
    }
}
