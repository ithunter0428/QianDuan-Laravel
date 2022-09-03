<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('round', 50)->nullable()->comment('转动');
            $table->string('bank_name', 50)->nullable()->comment('银行名称');
            $table->string('account_number', 50)->nullable()->comment('帐号');;
            $table->string('account_owner', 50)->nullable()->comment('账户持有人');;
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
        Schema::dropIfExists('bank_accounts');
    }
}
