<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "places".
 *
 * @property int $id
 * @property string $country
 * @property string $region
 * @property string $city
 * @property int $number
 */
class Places extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'places';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country', 'region', 'city', 'number'], 'required'],
            [['number'], 'integer'],
            [['country', 'region', 'city'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'country' => 'Country',
            'region' => 'Region',
            'city' => 'City',
            'number' => 'Number',
        ];
    }
}
