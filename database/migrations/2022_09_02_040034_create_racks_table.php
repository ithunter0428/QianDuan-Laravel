<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('racks', function (Blueprint $table) {
            $table->id();
            $table->string('region', 50)->nullable();
            $table->string('distinguish', 50)->nullable()->comment('区分');
            $table->string('shelf_code', 50)->nullable()->comment('货架代码');
            $table->string('size', 50)->nullable()->comment('尺寸');
            $table->integer('start')->nullable();
            $table->integer('end')->nullable();
            $table->integer('total_racks')->nullable()->comment('机架总数');
            $table->integer('available_racks')->nullable()->comment('可用机架数');
            $table->integer('use_racks')->nullable()->comment('使用的机架数');
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
        Schema::dropIfExists('racks');
    }
}
