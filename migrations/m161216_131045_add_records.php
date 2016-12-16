<?php

use yii\db\Migration;

class m161216_131045_add_records extends Migration
{
    public function up()
    {
        $this->batchInsert('{{%category}}', ['title'], [
            ['title1',],
            ['title2',],
            ['title3',],
        ]);
    }

    public function down()
    {
        return true;
    }
}
