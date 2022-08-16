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
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('K_coupon_id')->nullable();//KINEZOクーポンID
            $table->string('coupon_code')->nullable();//クーポン名
            $table->string('coupon_discount')->nullable();//割引金額
            $table->integer('coupon_line')->nullable();//閾値
            $table->string('self')->nullable();//利用可否
            $table->string('mobile')->nullable();//対象商品
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
        Schema::dropIfExists('coupons');
    }
};
