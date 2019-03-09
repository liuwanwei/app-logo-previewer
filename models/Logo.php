<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "logo".
 *
 * @property int $id
 * @property string $url
 * @property string $appName
 * @property string $testName
 * @property string $desc
 * @property string $createdAt
 * @property string $updatedAt
 */
class Logo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%logo}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['url', 'desc', 'appName', 'testName'], 'string'],
            [['createdAt', 'updatedAt'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'url' => '网址',
            'appName' => '应用',
            'testName' => '测试名称',
            'desc' => '描述信息',
            'createdAt' => '添加日期',
            'updatedAt' => '更新日期',
        ];
    }
}