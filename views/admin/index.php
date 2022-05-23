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

$this->title = 'Товары';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('создать фильм', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
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
            [
                'attribute' => 'category_id',
                'format'=>'raw',
                'label'=>'категория',
                'filter'=>ArrayHelper::map(\app\models\Category::find()->asArray()->all(),'id','name'),
                'value'=>'category.name'
            ],
            'count',

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Product $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);

                }
            ],
        ],
    ]); ?>


</div>
