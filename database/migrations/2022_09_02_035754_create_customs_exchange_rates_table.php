<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomsExchangeRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customs_exchange_rates', function (Blueprint $table) {
            $table->id();
            $table->string('country', 50)->nullable()->comment('国家');
            $table->string('round', 50)->nullable()->comment('转动');
            $table->string('period', 50)->nullable()->comment('期间');
            $table->decimal('exchange_rate')->nullable()->comment('汇率');
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
        Schema::dropIfExists('customs_exchange_rates');
    }
}
