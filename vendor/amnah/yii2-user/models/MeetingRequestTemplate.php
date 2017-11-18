<?php

namespace amnah\yii2\user\models;

use Yii;

/**
 * This is the model class for table "meeting_request_template".
 *
 * @property integer $meeting_request_template_id
 * @property string $template_name
 * @property string $template_content
 * @property integer $created_at
 * @property integer $updated_at
 */
class MeetingRequestTemplate extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'meeting_request_template';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['template_name', 'template_content', 'created_at', 'updated_at'], 'required'],
            [['template_content'], 'string'],
            [['created_at', 'updated_at'], 'integer'],
            [['template_name'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'meeting_request_template_id' => 'Meeting Request Template ID',
            'template_name' => 'Template Name',
            'template_content' => 'Template Content',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
