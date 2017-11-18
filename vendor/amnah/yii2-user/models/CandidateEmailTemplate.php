<?php

namespace amnah\yii2\user\models;

use Yii;

/**
 * This is the model class for table "candidate_email_template".
 *
 * @property integer $candidate_email_template_id
 * @property string $template_name
 * @property string $template_content
 * @property integer $is_default
 * @property integer $user_id
 * @property integer $office_id
 * @property integer $created_at
 * @property integer $updated_at
 */
class CandidateEmailTemplate extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'candidate_email_template';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['template_name', 'template_content', 'is_default', 'user_id', 'office_id', 'created_at', 'updated_at'], 'required'],
            [['template_content'], 'string'],
            [['is_default', 'user_id', 'office_id', 'created_at', 'updated_at'], 'integer'],
            [['template_name'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'candidate_email_template_id' => 'Candidate Email Template ID',
            'template_name' => 'Template Name',
            'template_content' => 'Template Content',
            'is_default' => 'Is Default',
            'user_id' => 'User ID',
            'office_id' => 'Office ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
