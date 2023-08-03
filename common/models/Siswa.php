<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "siswa".
 *
 * @property int $id
 * @property string|null $nis
 * @property string|null $nama_siswa
 * @property string|null $tanggal_lahir
 * @property string|null $alamat
 * @property string|null $foto_siswa
 */
class Siswa extends \yii\db\ActiveRecord
{
    public $upload_foto;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'siswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nis', 'nama_siswa', 'tanggal_lahir', 'alamat', 'foto_siswa'], 'string', 'max' => 255],
            [['upload_foto'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nis' => 'Nis',
            'nama_siswa' => 'Nama Siswa',
            'tanggal_lahir' => 'Tanggal Lahir',
            'alamat' => 'Alamat',
            'foto_siswa' => 'Foto Siswa',
        ];
    }


    public function setKelasSiswa($id_kelas){
        $ModelKelasSiswa = new KelasSiswa();
        $ModelKelasSiswa->id_siswa = $this->id;
        $ModelKelasSiswa->id_kelas = $id_kelas;
        $ModelKelasSiswa->save();
    }

    public function upload()
    {
        if ($this->validate()) {
            $nama_file = $this->id.'.jpg' ;
            if($this->upload_foto->saveAs('@backend/web/images/' . $nama_file))
            {
                return true;
            }
        } else {
            return false;
        }
    }

    public function setFoto(){
        $this->foto_siswa = $this->id.'.jpg';
        $this->save(false);
    }

}
