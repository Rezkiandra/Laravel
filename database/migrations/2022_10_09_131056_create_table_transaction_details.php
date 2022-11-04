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
        Schema::create('table_transaction_details', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('transaction_id');
            $table->foreign('transaction_id')->references('id')->on('table_transactions');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('table_products');
            
            // $table->foreignId('transaction_id')->constrained();
            // $table->foreignId('product_id')->constrained();

            $table->integer('qty');
            $table->integer('price');
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
        Schema::dropIfExists('table_transaction_details');
    }
};
