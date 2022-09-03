<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWaybillBandwidthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('waybill_bandwidths', function (Blueprint $table) {
            $table->id();
            $table->string('city', 50)->nullable()->comment('区域');
            $table->string('shipping_method', 50)->nullable()->comment('发货方式');
            $table->string('courier_company', 50)->nullable()->comment('快递公司');
            $table->string('title', 50)->nullable()->comment('标题');
            $table->string('bandwidth_bottom', 50)->nullable()->comment('运单带宽');
            $table->string('bandwidth_top', 50)->nullable()->comment('运单带宽');
            $table->integer('bandwidth_total')->nullable()->comment('总带宽');
            $table->decimal('use_quantity')->nullable()->comment('使用运单数量');
            $table->decimal('available_quantity')->nullable()->comment('可用运单数量');
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
        Schema::dropIfExists('waybill_bandwidths');
    }
}
