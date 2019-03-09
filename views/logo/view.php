<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Logo */

$this->title = '听写兔几';
$this->params['breadcrumbs'][] = ['label' => '应用图标', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="logo-view">

    <H1>OK!</H1>
    <img src="<?= $model->url ?>">

</div>