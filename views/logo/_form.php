<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Logo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="logo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'desc')->textarea(['rows' => 2]) ?>

    <div class="form-group">
        <?= Html::submitButton('上传', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div> 