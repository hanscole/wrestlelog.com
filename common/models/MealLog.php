<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "meal_log".
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $meal
 * @property string|null $created_date
 */
class MealLog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'meal_log';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id'], 'integer'],
            [['created_date'], 'safe'],
            [['meal'], 'string', 'max' => 1024],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'meal' => 'Meal',
            'created_date' => 'Date',
        ];
    }

    public function init()
    {
        parent::init();

        $this->setAttribute('user_id', Yii::$app->user->identity->getId());
    }
}
