<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Product */

$this->title = $model->name;
\yii\web\YiiAsset::register($this);
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [

            'name',
            'date',
            [
                'format' => 'image',
                'attribute'=>'photo',
                'content'=>'photo',

            ],
            'year',
            'model',
            'country',
            'price',
            'category_id',
            'count',
        ],

    ]) ?>

</div>
<a href="/">купить</a>
