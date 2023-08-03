<?php

use yii\widgets\DetailView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Siswa */
?>
<div class="siswa-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nis',
            'nama_siswa',
            'tanggal_lahir',
            'alamat:ntext',
        ],
    ]) ?>
    
    <?= Html::img('@web/images/'.$model->id.'.jpg', ['alt'=>'some', 'class'=>'thing']);?>
</div>
