<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "target".
 *
 * @property integer $id
 * @property string $title
 * @property string $year
 * @property integer $created_at
 * @property integer $updated_at
 */
class Target extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'target';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'year'], 'required'],
            [['created_at', 'updated_at'], 'integer'],
            [['title'], 'string', 'max' => 64],
            [['year'], 'string', 'max' => 4],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => '目标名字',
            'year' => '年份',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
