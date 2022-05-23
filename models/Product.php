<?php

namespace app\models;
use yii\base\Model;
use Yii;
use yii\web\UploadedFile;
/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $name
 * @property string $date
 * @property string $photo
 * @property int $year
 * @property string $model
 * @property string $country
 * @property int $price
 * @property int $category_id
 * @property int $count
 *
 * @property Basket[] $baskets
 * @property Category $category
 * @property ProductInOrder[] $productInOrders
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'year', 'model', 'country', 'price', 'category_id', 'count'], 'required'],
            [['date'], 'safe'],
            [['year', 'price', 'category_id', 'count'], 'integer'],
            [['name', 'model', 'country'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'date' => 'Date',
            'photo' => 'Photo',
            'year' => 'Year',
            'model' => 'Model',
            'country' => 'Country',
            'price' => 'Price',
            'category_id' => 'Category ID',
            'count' => 'Count',
        ];
    }

    /**
     * Gets query for [[Baskets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBaskets()
    {
        return $this->hasMany(Basket::className(), ['product_id' => 'id']);
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * Gets query for [[ProductInOrders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductInOrders()
    {
        return $this->hasMany(ProductInOrder::className(), ['product_id' => 'id']);
    }


}
