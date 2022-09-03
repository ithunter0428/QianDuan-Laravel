<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePilotFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pilot_fees', function (Blueprint $table) {
            $table->id();
            $table->string('keyword1', 50)->nullable()->comment('关键词(1)');
            $table->string('keyword2', 50)->nullable()->comment('关键词(2)');
            $table->string('keyword3', 50)->nullable()->comment('关键词(3)');
            $table->decimal('ferry_fee')->nullable()->comment('渡轮费');
            $table->decimal('value_add_shipping')->nullable()->comment('增值运费');
            $table->string('remark', 50)->nullable()->comment('备注	');
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
        Schema::dropIfExists('pilot_fees');
    }
}
