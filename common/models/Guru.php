<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "guru".
 *
 * @property int $id
 * @property string|null $nip
 * @property string|null $nama_guru
 * @property string|null $tanggal_lahir
 * @property string|null $alamat
 * @property string|null $foto_guru
 */
class Guru extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'guru';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'nama_guru', 'tanggal_lahir', 'alamat', 'foto_guru'], 'string', 'max' => 255],
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => 'mdm\upload\UploadBehavior',
                'attribute' => 'file', // required, use to receive input file
                'savedAttribute' => 'foto_guru', // optional, use to link model with saved file.
                'uploadPath' => '@common/uploads', // saved directory. default to '@runtime/upload'
                'autoSave' => true, // when true then uploaded file will be save before ActiveRecord::save()
                'autoDelete' => true, // when true then uploaded file will deleted before ActiveRecord::delete()
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nip' => 'Nip',
            'nama_guru' => 'Nama Guru',
            'tanggal_lahir' => 'Tanggal Lahir',
            'alamat' => 'Alamat',
            'foto_guru' => 'Foto Guru',
        ];
    }
}
