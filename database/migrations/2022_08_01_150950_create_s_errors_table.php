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
        Schema::create('s_errors', function (Blueprint $table) {
            $table->id();//ID
            $table->string('err_code')->nullable();//エラーコード
            $table->string('err_contents')->nullable();//エラー内容
            $table->string('err_handling')->nullable();//エラー対応
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
        Schema::dropIfExists('s_errors');
    }
};
