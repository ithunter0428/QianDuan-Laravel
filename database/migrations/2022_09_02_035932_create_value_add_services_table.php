<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValueAddServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('value_add_services', function (Blueprint $table) {
            $table->id();
            $table->string('service_name', 50)->nullable()->comment('增值服务');
            $table->decimal('price')->nullable()->comment('价格');
            $table->string('currency', 50)->nullable();
            $table->string('comment', 50)->nullable();
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
        Schema::dropIfExists('value_add_services');
    }
}
