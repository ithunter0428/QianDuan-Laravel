<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('deposit_applications', function (Blueprint $table) {
            $table->id();
            $table->integer('sender_user_id')->nullable();
            $table->string('category', 31)->nullable();
            $table->float('amount')->default(0);
            $table->string('requester', 255);
            $table->string('bank_name', 255);
            $table->string('account_number', 255);
            $table->integer('status')->default(0);
            $table->date('expected_date');
            $table->boolean('passbook')->default(0);
            $table->integer('passbook_state')->default(0);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deposit_applications');
    }
}
