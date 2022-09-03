<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRackUsagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rack_usages', function (Blueprint $table) {
            $table->id();
            $table->string('shelf_code', 50)->nullable()->comment('货架代码');
            $table->string('rack_number', 50)->nullable()->comment('机架号');
            $table->string('size', 50)->nullable()->comment('尺寸');
            $table->string('waybill_number', 50)->nullable()->comment('运单号码');
            $table->string('stock_number', 50)->nullable()->comment('库存代码');
            $table->string('no_data', 50)->nullable();
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
        Schema::dropIfExists('rack_usages');
    }
}
