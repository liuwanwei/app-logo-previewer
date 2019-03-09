<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\helpers\PathHelper;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LogoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '应用图标';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="logo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加图标', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'url',
                'format' => 'raw',
                'value' => function($model){
                    return Html::img($model->url, ['height' => '64px', 'weight' => '64px']);
                }
            ],
            'desc:ntext',
            'createdAt',
            'updatedAt',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
