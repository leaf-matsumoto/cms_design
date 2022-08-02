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
        Schema::create('pickups', function (Blueprint $table) {
            $table->id();
            $table->string('menu_code')->nullable();//商品コード
            $table->string('menu_name')->nullable();//商品名
            $table->integer('menu_price')->nullable();//商品単価
            $table->string('self')->nullable();//セルフレジ
            $table->string('mobile')->nullable();//モバイルオーダー
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pickups');
    }
};
