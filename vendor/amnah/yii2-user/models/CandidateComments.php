<?php

namespace amnah\yii2\user\models;

use Yii;

/**
 * This is the model class for table "candidate_comments".
 *
 * @property integer $candidate_comments_id
 * @property integer $candidate_id
 * @property integer $user_id
 * @property string $comment
 * @property string $tagged_users
 * @property integer $created_at
 * @property integer $updated_at
 */
class CandidateComments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'candidate_comments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['candidate_id', 'user_id', 'comment', 'tagged_users', 'created_at', 'updated_at'], 'required'],
            [['candidate_id', 'user_id', 'created_at', 'updated_at'], 'integer'],
            [['comment'], 'string'],
            [['tagged_users'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'candidate_comments_id' => 'Candidate Comments ID',
            'candidate_id' => 'Candidate ID',
            'user_id' => 'User ID',
            'comment' => 'Comment',
            'tagged_users' => 'Tagged Users',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
