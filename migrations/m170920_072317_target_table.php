<?php

use yii\db\Migration;

class m170920_072317_target_table extends Migration
{
    public function safeUp()
    {
        $this->createTable("target",[
            'id'=>$this->primaryKey(),
            'title'=>$this->string(64)->notNull()->comment('目标名称'),
            'year'=>$this->string(4)->notNull()->comment('年份'),
            'created_at'=>$this->integer(11)->notNull()->comment('新建时间'),
            'updated_at'=>$this->integer(11)->notNull()->comment('更新时间'),
        ]);
    }

    public function safeDown()
    {
        echo "m170920_072317_target_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170920_072317_target_table cannot be reverted.\n";

        return false;
    }
    */
}
