<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "notes".
 *
 * @property int $id
 * @property int $user_id
 * @property string $username
 * @property string $notes
 * @property int $created_at
 * @property int $updated_at
 */
class Notes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'notes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'username', 'notes', 'created_at', 'updated_at'], 'required'],
            [['user_id', 'created_at', 'updated_at'], 'integer'],
            [['username'], 'string', 'max' => 32],
            [['notes'], 'string', 'max' => 6000],
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
            'notes' => 'Notes',
            'created_date' => 'Date',
        ];
    }

    public function init()
    {
        parent::init();

        $this->setAttribute('user_id', Yii::$app->user->identity->getId());
    }
}
