<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnoucementSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_announcement_settings', function (Blueprint $table) {
            $table->id();
            $table->string('board_name');
            $table->string('type');
            $table->boolean('use_password');
            $table->boolean('use_title');
            $table->boolean('use_state');
            $table->boolean('write_permission');
            $table->boolean('view_all');
            $table->boolean('comment_permission');
            $table->integer('page_count');
            $table->integer('notification_count');
            $table->boolean('is_using');
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
        Schema::dropIfExists('annoucement_settings');
    }
}
