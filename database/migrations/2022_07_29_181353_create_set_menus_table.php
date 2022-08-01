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
        Schema::create('set_menus', function (Blueprint $table) {
        
                $table->id();//ID
                $table->string('menu_code')->nullable();//商品コード
                $table->string('menu_type')->nullable();//商品分類
                $table->string('basic_menu_name')->nullable();//基本商品名
                $table->string('receipt_menu_name')->nullable();//商品レシート名
                $table->string('theater_name')->nullable();//劇場コード
                $table->string('order_menu_name')->nullable();//オーダー管理名
                $table->string('p_menu_name')->nullable();//表示名
                $table->string('c_menu_name')->nullable();//子商品名
                $table->integer('menu_price')->nullable();//商品単価
                $table->string('self')->nullable();//セルフレジ
                $table->string('mobile')->nullable();//モバイルオーダー
                $table->string('menu_class')->nullable();//商品準備場所分類
                $table->integer('limited_time')->nullable();//販売開始日
                $table->string('start_sale')->nullable();//販売開始日
                $table->string('end_sale')->nullable();//販売終了日
                $table->string('menu_img')->nullable();//商品画像
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
        Schema::dropIfExists('set_menus');
    }
};
