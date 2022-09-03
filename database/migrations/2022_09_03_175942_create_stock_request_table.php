<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_request', function (Blueprint $table) {
            $table->id();
            $table->string('logistics_center')->nullable()->comment('物流中心');
            $table->string('mall_url')->nullable()->comment('商城网址');
            $table->string('clearance_category_search')->nullable()->comment('通关类目搜索');
            $table->string('tracking_number')->nullable()->comment('TRACKING NO');
            $table->string('quantity')->nullable()->comment('数量');
            $table->string('unit_price')->nullable()->comment('单价');
            $table->string('product_url')->nullable()->comment('商品URL');
            $table->string('trademark')->nullable()->comment('商标');
            $table->string('product_english_name')->nullable()->comment('商品英文名称');
            $table->string('color')->nullable()->comment('颜色');
            $table->string('size')->nullable()->comment('尺寸');
            $table->string('product_image_url')->nullable()->comment('商品图片URL');
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
        Schema::dropIfExists('stock_request');
    }
}
