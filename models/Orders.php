<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property int $phone
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'app_orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone'], 'required', 'message' => 'Это обязательное поле!'],
            ['email', 'email', 'message' => 'Проверьте email!'],
            [['name', 'email'], 'string', 'max' => 255],
            [['name', 'email', 'phone'], 'unique',  'message' => 'Уже где-то было!'],
            ['name', 'match', 'pattern' => '/^[a-z]*$/i', 'message' => 'Только латиница!'],
            ['phone', 'match', 'pattern' => '/^\+7\(\d*\)...-..-..$/', 'message' => 'Не соответствует формату!'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'email' => 'Email',
            'phone' => 'Телефон',
        ];
    }
}
