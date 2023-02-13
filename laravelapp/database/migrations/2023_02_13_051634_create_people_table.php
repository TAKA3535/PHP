<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    // 5-31 テーブル生成の処理 P225
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('mail');
            $table->integer('age');
            $table->timestamps();
        });
    }

    // 5-32　テーブルの削除処理
    public function down()
    {
        Schema::dropIfExists('people');
    }
};
