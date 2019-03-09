<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LogoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="logo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'type' => ActiveForm::TYPE_INLINE,
    ]); ?>

    <?= $form->field($model, 'appName') ?>

    <?= $form->field($model, 'desc') ?>

    <div class="form-group">
        <?= Html::submitButton('搜索', ['class' => 'btn btn-primary']) ?>
    </div>

    <p class="pull-right">
        <?= Html::a('添加图标', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php ActiveForm::end(); ?>

</div> 