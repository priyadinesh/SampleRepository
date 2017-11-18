<?php

namespace amnah\yii2\user\models;

use Yii;

/**
 * This is the model class for table "candidate_source".
 *
 * @property integer $id
 * @property string $source_name
 * @property integer $is_deleted
 */
class CandidateSource extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'candidate_source';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['source_name', 'is_deleted'], 'required'],
            [['is_deleted'], 'integer'],
            [['source_name'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'source_name' => 'Source Name',
            'is_deleted' => 'Is Deleted',
        ];
    }
}
