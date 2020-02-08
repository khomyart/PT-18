<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bookings".
 *
 * @property int $id
 * @property int $client_id
 * @property float $total
 * @property string $create_time
 * @property string $date_from
 * @property string $date_to
 * @property string $town
 *
 * @property Clients $client
 */
class Bookings extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bookings';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['client_id', 'date_from', 'date_to', 'town'], 'required'],
            [['client_id'], 'integer'],
            [['total'], 'double', 'min' => 100],
            [['create_time', 'date_from', 'date_to'], 'safe'],
            [['town'], 'string', 'max' => 255],
            [['town'], 'in', 'range' => ['LA', 'Boston', 'Berlin', 'Bonn', 'Belgrade', 'Warsaw']],
            [['client_id'], 'exist', 'skipOnError' => true, 'targetClass' => Clients::className(), 'targetAttribute' => ['client_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'client_id' => 'Client ID',
            'total' => 'Total',
            'create_time' => 'Create Time',
            'date_from' => 'Date From',
            'date_to' => 'Date To',
            'town' => 'Town',
        ];
    }

    /**
     * Gets query for [[Client]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClient()
    {
        return $this->hasOne(Clients::className(), ['id' => 'client_id']);
    }
}
