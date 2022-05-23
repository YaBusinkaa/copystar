<?php

use app\models\Order;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'заказы';

?>
<div class="order-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('создать заказ', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'order_date',
            'status_id' => [
                'label' => 'статус',
                'attribute' => 'status_id',

                'filter' => ArrayHelper::map(\app\models\Status::find()->asArray()->all(), 'id', 'name'),
                'value' => 'status.name',
            ],


            [
                'attribute' => 'fio',
                'format' => 'raw',
                'label' => 'ФИО',
                'content' => function ($model) {
                    return $model->user->name . ' ' . $model->user->surname . ' ' . $model->user->patronomic;
                }
            ],
            [
                'attribute' => 'delete',
                'label'=>'удалить',
                'format'=>'raw',
                'content'=>function($model)
                {
                    if ($model->status_id === 1){
                return Html::a('Delete', ['delete', 'id' => $model->id],['class' => 'btn btn-primary']);
                    }
                }
            ],
        ],
    ]); ?>


</div>
