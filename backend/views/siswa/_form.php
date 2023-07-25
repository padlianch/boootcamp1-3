<?php
use yii\bootstrap5\Html;
use yii\widgets\ActiveForm;


// use kartik\form\ActiveForm;
use kartik\date\DatePicker;
use kartik\icons\Icon;
Icon::map($this);

/* @var $this yii\web\View */
/* @var $model common\models\Siswa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="siswa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_siswa')->textInput(['maxlength' => true]) ?>

    <?=
        $form->field($model, 'tanggal_lahir')->widget(DatePicker::classname(), [
            'options' => ['placeholder' => 'Masukkan tanggal lahir'],
            'pluginOptions' => [
                'autoclose' => true
            ]
        ]);
    ?>

    <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
