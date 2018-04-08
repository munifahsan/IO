<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fakultas".
 *
 * @property string $id_fak
 * @property string $nama_fak
 */
class Fakultas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fakultas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_fak'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_fak' => 'Id Fak',
            'nama_fak' => 'Nama Fak',
        ];
    }
}
