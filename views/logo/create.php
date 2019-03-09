<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Logo */

$this->title = '添加应用图标';
$this->params['breadcrumbs'][] = ['label' => '应用图标', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="logo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_create_form', [
        'model' => $model,
    ]) ?>

</div>
