<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "practice_log".
 *
 * @property int $id
 * @property int $user_id
 * @property string $date
 * @property int|null $hours
 * @property int|null $minutes
 * @property string|null $created_date
 */
class PracticeLog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'practice_log';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'date'], 'required'],
            [['user_id', 'hours', 'minutes'], 'integer'],
            [['date', 'created_date'], 'safe'],
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
            'date' => 'Date',
            'hours' => 'Hours',
            'minutes' => 'Minutes',
            'created_date' => 'Created Date',
        ];
    }

    public function getUser(){
       return $this->hasOne('Da\User\Model\Usewr', ['id' => 'user_id']);

    }
}
