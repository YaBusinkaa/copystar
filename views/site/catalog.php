<?php

use app\models\Product;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'каталог';

?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name',
            //'date'=>'доступная дата',
            'photo',
            'year',
            //'model',
            'country',
            'price',
            'count',
            [
                    'attribute' => 'buy',
                    'format'=>'raw',
                    'label'=>'посмотреть',
                    'content'=>function ($model){
                return  Html::a('посмотреть', ['view', 'id' => $model->id], ['class' => 'btn btn-primary']);
                    }
            ],
            [
                'attribute' => 'buy',
                'format'=>'raw',
                'label'=>'купить',
                'content'=>function ($model){
                    return  Html::a('купить', ['view', 'id' => $model->id], ['class' => 'btn btn-primary']);
                }
            ]



        ],
    ]); ?>


</div>
