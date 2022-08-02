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
        Schema::create('purchase_papers', function (Blueprint $table) {
            $table->id();//ID
            $table->string('theater_name')->nullable();//劇場コード
            $table->string('order_info')->nullable();//オーダー用紙注意書き
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
        Schema::dropIfExists('purchase_papers');
    }
};
