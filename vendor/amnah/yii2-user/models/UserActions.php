<?php

namespace amnah\yii2\user\models;

use Yii;

/**
 * This is the model class for table "user_actions".
 *
 * @property integer $action_id
 * @property string $action_name
 * @property string $action_image
 * @property string $action_desc
 * @property integer $is_active
 * @property integer $created_at
 * @property integer $updated_at
 */
class UserActions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_actions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['action_name', 'action_image', 'action_desc', 'created_at', 'updated_at'], 'required'],
            [['is_active', 'created_at', 'updated_at'], 'integer'],
            [['action_name', 'action_desc'], 'string', 'max' => 250],
            [['action_image'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'action_id' => 'Action ID',
            'action_name' => 'Action Name',
            'action_image' => 'Action Image',
            'action_desc' => 'Action Desc',
            'is_active' => 'Is Active',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
