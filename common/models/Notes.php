<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "notes".
 *
 * @property int $id
 * @property int $user_id
 * @property string $note
 * @property int $created_at
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
            [['user_id', 'note'], 'required'],
            [['user_id', 'created_date' ], 'integer'],
            [['note'], 'string', 'max' => 6000],
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
            'note' => 'Notes',
            'created_date' => 'Date',
        ];
    }

    public function init()
    {
        parent::init();

        $this->setAttribute('user_id', Yii::$app->user->identity->getId());
    }
}
