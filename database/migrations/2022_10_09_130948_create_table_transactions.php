<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_transactions', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('cashier_id');
            $table->foreign('cashier_id')->references('id')->on('users');

            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('table_customers');

            $table->integer('invoice');
            $table->integer('cash');
            $table->integer('change');
            $table->integer('discount');
            $table->integer('grand_total');
            $table->integer('table_total');
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
        Schema::dropIfExists('table_transactions');
    }
};
