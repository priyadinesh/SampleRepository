<?php

namespace amnah\yii2\user\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property integer $role_id
 * @property integer $status
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string $company_name
 * @property string $image_path
 * @property string $email_signature
 * @property string $meeting_address
 * @property string $city
 * @property string $state
 * @property string $country
 * @property integer $zipcode
 * @property string $auth_key
 * @property string $access_token
 * @property string $logged_in_ip
 * @property string $logged_in_at
 * @property string $created_ip
 * @property string $created_at
 * @property string $updated_at
 * @property string $banned_at
 * @property string $banned_reason
 *
 * @property CandidateComments[] $candidateComments
 * @property CandidateEmailTemplate[] $candidateEmailTemplates
 * @property CandidateTimeline[] $candidateTimelines
 * @property Profile[] $profiles
 * @property Role $role
 * @property UserAuth[] $userAuths
 * @property UserToken[] $userTokens
 */
class UserProfile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email','company_name', 'email_signature', 'meeting_address', 'city', 'state', 'country', 'zipcode'], 'safe'],
            [['role_id', 'status', 'zipcode','is_deleted'], 'integer'],
            [['meeting_address'], 'string'],
            [['logged_in_at', 'created_at', 'updated_at', 'banned_at'], 'safe'],
            [['email', 'username', 'password', 'auth_key', 'access_token', 'logged_in_ip', 'created_ip', 'banned_reason'], 'string', 'max' => 255],
            [['company_name', 'image_path', 'email_signature'], 'string', 'max' => 250],
            [['city', 'state', 'country'], 'string', 'max' => 100],
            [['email'], 'unique'],
			[['email'], 'email'],
            [['username'], 'unique'],
            [['role_id'], 'exist', 'skipOnError' => true, 'targetClass' => Role::className(), 'targetAttribute' => ['role_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'role_id' => 'Role ID',
            'status' => 'Status',
            'email' => 'Email',
            'username' => 'Username',
            'password' => 'Password',
            'company_name' => 'Company Name',
            'image_path' => 'Image Path',
            'email_signature' => 'Email Signature',
            'meeting_address' => 'Meeting Address',
            'city' => 'City',
            'state' => 'State',
            'country' => 'Country',
            'zipcode' => 'Zipcode',
            'auth_key' => 'Auth Key',
            'access_token' => 'Access Token',
            'logged_in_ip' => 'Logged In Ip',
            'logged_in_at' => 'Logged In At',
            'created_ip' => 'Created Ip',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'banned_at' => 'Banned At',
            'banned_reason' => 'Banned Reason',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCandidateComments()
    {
        return $this->hasMany(CandidateComments::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCandidateEmailTemplates()
    {
        return $this->hasMany(CandidateEmailTemplate::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCandidateTimelines()
    {
        return $this->hasMany(CandidateTimeline::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfiles()
    {
        return $this->hasMany(Profile::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRole()
    {
        return $this->hasOne(Role::className(), ['id' => 'role_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserAuths()
    {
        return $this->hasMany(UserAuth::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserTokens()
    {
        return $this->hasMany(UserToken::className(), ['user_id' => 'id']);
    }
}
