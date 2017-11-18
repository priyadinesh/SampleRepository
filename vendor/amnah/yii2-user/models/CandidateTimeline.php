<?php

namespace amnah\yii2\user\models;

use Yii;

/**
 * This is the model class for table "candidate_timeline".
 *
 * @property integer $timeline_id
 * @property integer $candidate_id
 * @property integer $user_id
 * @property integer $action_id
 * @property integer $status_id
 * @property integer $offices_id
 * @property string $added_comment
 * @property integer $candidate_email_template_id
 * @property string $sent_email
 * @property string $email_attachment
 * @property integer $meeting_time
 * @property integer $meeting_request_accepted
 * @property integer $created_at
 *
 * @property Profile $candidate
 * @property User $user
 * @property UserActions $action
 */
class CandidateTimeline extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'candidate_timeline';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['candidate_id', 'user_id', 'action_id', 'created_at'], 'required'],
            [['candidate_id', 'user_id', 'action_id', 'status_id', 'offices_id', 'candidate_email_template_id', 'meeting_time', 'meeting_request_accepted', 'created_at'], 'integer'],
            [['added_comment', 'email_attachment'], 'string'],
            [['sent_email'], 'string', 'max' => 500],
            [['candidate_id'], 'exist', 'skipOnError' => true, 'targetClass' => Profile::className(), 'targetAttribute' => ['candidate_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['action_id'], 'exist', 'skipOnError' => true, 'targetClass' => UserActions::className(), 'targetAttribute' => ['action_id' => 'action_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'timeline_id' => 'Timeline ID',
            'candidate_id' => 'Candidate ID',
            'user_id' => 'User ID',
            'action_id' => 'Action ID',
            'status_id' => 'Status ID',
            'offices_id' => 'Offices ID',
            'added_comment' => 'Added Comment',
            'candidate_email_template_id' => 'Candidate Email Template ID',
            'sent_email' => 'Sent Email',
            'email_attachment' => 'Email Attachment',
            'meeting_time' => 'Meeting Time',
            'meeting_request_accepted' => 'Meeting Request Accepted',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCandidate()
    {
        return $this->hasOne(Profile::className(), ['id' => 'candidate_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAction()
    {
        return $this->hasOne(UserActions::className(), ['action_id' => 'action_id']);
    }
}
