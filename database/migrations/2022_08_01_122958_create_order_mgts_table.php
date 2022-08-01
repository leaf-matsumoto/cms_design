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
        Schema::create('order_mgts', function (Blueprint $table) {
            $table->id();
            $table->string('member_id')->nullable();//会員ID
            $table->string('order_id')->nullable();//オーダーID
            $table->string('order_day')->nullable();//注文日時
            $table->string('order_content')->nullable();//注文内容
            $table->string('order_status')->nullable();//オーダーステータス
            $table->string('pay_situation')->nullable();//決済状況
            $table->string('order_situation')->nullable();//注文状況
            $table->string('order_kinds')->nullable();//オーダー種別
            $table->string('call_num')->nullable();//呼出し番号
            $table->string('receipt_num')->nullable();//レシートNo
            $table->string('tentative_order')->nullable();//仮オーダー日時
            $table->string('product_order')->nullable();//本オーダー日時
            $table->string('menu_day')->nullable();//準備日時
            $table->string('call_day')->nullable();//呼出し日時
            $table->string('self')->nullable();//完了日時
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
        Schema::dropIfExists('order_mgts');
    }
};
