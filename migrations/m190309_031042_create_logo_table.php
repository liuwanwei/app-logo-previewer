<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%app_logo}}`.
 */
class m190309_031042_create_logo_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%logo}}', [
            'id' => $this->primaryKey(),
            'appName' => $this->string(32)->comment('应用名称'),
            'testName' => $this->string(32)->comment('测试名称'),
            'desc' => $this->text(),
            'url' => $this->text(),            
            'createdAt' => $this->dateTime()->defaultExpression('CURRENT_TIMESTAMP'),
            'updatedAt' => $this->dateTime()->defaultExpression('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%logo}}');
    }
}
