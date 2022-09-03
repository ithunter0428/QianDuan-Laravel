<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centers', function (Blueprint $table) {
            $table->id();
            $table->string('country', 50)->nullable()->comment('国家');
            $table->string('city', 50)->nullable()->comment('区域');
            $table->string('zipcode', 50)->nullable()->comment('区域代码');
            $table->string('measurement_unit', 50)->nullable()->comment('测量单位');
            $table->string('shipping_method', 50)->nullable()->comment('发货方式');
            $table->string('address', 50)->nullable()->comment('地址');
            $table->string('phone', 50)->nullable()->comment('电话号码');
            $table->string('shipping_center', 50)->nullable()->comment('航运中心');
            $table->boolean('status')->default(0)->comment('是否使用');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('centers');
    }
}
