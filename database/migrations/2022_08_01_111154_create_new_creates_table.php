<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_creates', function (Blueprint $table) {
            $table->id();//ID
            $table->string('theater_name')->nullable();//劇場コード
            $table->string('start_day')->nullable();//掲載開始日
            $table->string('end_day')->nullable();//掲載終了日
            $table->string('news_contents')->nullable();//お知らせ内容
            $table->timestamps();//登録日/更新日
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('new_creates');
    }
};
