<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_consultation', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('content');
            $table->string('id_name');
            $table->integer('view_count');
            $table->integer('state')->comment('0: 询问(ask), 1: 新查询(new query), 2: 回答完毕(finished answering)');
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
        Schema::dropIfExists('consultation');
    }
}
