<?php

namespace app\Models;

use Yii;

/**
 * This is the model class for table "peserta".
 *
 * @property int $id
 * @property string $nama
 * @property int $nip
 * @property string $unit_kerja
 * @property string $jabatan
 * @property string $tmt_jabatan
 * @property string $type
 */
class Peserta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'peserta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'nip', 'unit_kerja', 'jabatan', 'tmt_jabatan', 'type'], 'required', 'message' => '{attribute} harus diisi'],
            [['nip'], 'integer'],
            [['tmt_jabatan'], 'safe'],
            [['nama', 'unit_kerja', 'jabatan', 'type'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'nip' => 'Nip',
            'unit_kerja' => 'Unit Kerja',
            'jabatan' => 'Jabatan',
            'tmt_jabatan' => 'Tmt Jabatan',
            'type' => 'Type',
        ];
    }
}
