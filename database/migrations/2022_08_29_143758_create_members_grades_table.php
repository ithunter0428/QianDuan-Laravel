<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_grades', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->nullable();
            $table->integer('grade')->nullable();
            $table->integer('send_amount_from')->default(0);
            $table->integer('send_amount_to')->default(0);
            $table->decimal('purchase_fee')->default(0);
            $table->integer('coupon_delivery_count')->default(0);
            $table->integer('coupon_value')->default(0);
            $table->decimal('integral')->default(0);
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('member_grades');
    }
}
