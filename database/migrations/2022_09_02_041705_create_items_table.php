<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->integer('item_number')->nullable()->comment('项目编号');
            $table->integer('hs_code')->nullable()->comment('HS编码');
            $table->string('category')->nullable()->comment('类别');
            $table->string('project_name_en', 50)->nullable()->comment('项目名称（英文)');
            $table->string('project_name_ch', 50)->nullable()->comment('项目名称（中文)');
            $table->boolean('is_empty_list')->default(0)->comment('列表是否清空');
            $table->decimal('tariff')->default(0)->comment('关税税率');
            $table->decimal('vat_rate')->default(0)->comment('增值税率');
            $table->index('category');
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
        Schema::dropIfExists('items');
    }
}
