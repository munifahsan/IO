<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbabsen".
 *
 * @property integer $id_absen
 * @property integer $id_mahasiswa
 * @property string $alasan
 * @property string $waktu_keluar
 * @property string $waktu_masuk
 * @property string $status
 */
class Tbabsen extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbabsen';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_mahasiswa', 'alasan', 'waktu_keluar', 'waktu_masuk'], 'required'],
            [['id_mahasiswa'], 'integer'],
            [['alasan'], 'string'],
            [['waktu_keluar', 'waktu_masuk'], 'safe'],
            [['status'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_absen' => 'Id Absen',
            'id_mahasiswa' => 'Id Mahasiswa',
            'alasan' => 'Alasan',
            'waktu_keluar' => 'Waktu Keluar',
            'waktu_masuk' => 'Waktu Masuk',
            'status' => 'Status',
        ];
    }
}
