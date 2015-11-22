<?php

use yii\db\Schema;
use yii\db\Migration;

class m151113_182503_PostCategory extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'nickname' => $this->text()->notNull(),
            'about' => $this->string()
        ], $tableOptions);
        $this->createTable('{{%category}}',[
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()
        ],$tableOptions);
        $this->createTable('{{%post}}',[
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'anons' => $this->text()->notNull(),
            'content'=> $this->text()->notNull(),
            'category_id' => $this->integer(),
            'author_id' => $this->integer(),
            'publish_status' => "enum('draft','publish') NOT NULL DEFAULT 'draft'",
            'publish_date' => $this->timestamp()->notNull(),
            'publish_modified_date' => $this->timestamp()->notNull()
        ],$tableOptions);

        $this->createIndex('FK_post_author', '{{%post}}', 'author_id');
        $this->addForeignKey(
            'FK_post_author', '{{%post}}', 'author_id', '{{%user}}', 'id', 'SET NULL', 'CASCADE'
        );

        $this->createIndex('FK_post_category', '{{%post}}', 'category_id');
        $this->addForeignKey(
            'FK_post_category', '{{%post}}', 'category_id', '{{%category}}', 'id', 'SET NULL', 'CASCADE'
        );
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
        $this->dropTable('{{%post}}');
        $this->dropTable('{{%category}}');
 /*       $this->dropIndex('FK_post_author','{{%post}}');
        $this->dropForeignKey('FK_post_author','{{%post}}');
        $this->dropIndex('FK_post_category','{{%category}}');
        $this->dropForeignKey('FK_post_author','{{%category}}');*/
    }
}
