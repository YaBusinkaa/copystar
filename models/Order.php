<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property string $order_date
 * @property int $user_id
 * @property int $status_id
 * @property string $reason
 *
 * @property ProductInOrder[] $productInOrders
 * @property Status $status
 * @property User $user
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_date'], 'safe'],
            [['user_id', 'reason'], 'required'],
            [['user_id', 'status_id'], 'integer'],
            [['reason'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['status_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order_date' => 'Order Date',
            'user_id' => 'User ID',
            'status_id' => 'Status ID',
            'reason' => 'Reason',
        ];
    }

    /**
     * Gets query for [[ProductInOrders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductInOrders()
    {
        return $this->hasMany(ProductInOrder::className(), ['order_id' => 'id']);
    }

    /**
     * Gets query for [[Status]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(Status::className(), ['id' => 'status_id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
