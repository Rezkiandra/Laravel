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
        Schema::create('table_carts', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('cashier_id');
            $table->foreign('cashier_id')->references('id')->on('users');
            
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('table_products');
            // $table->foreignId('product_id')->constrained();

            $table->integer('qty');
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
        Schema::dropIfExists('table_carts');
    }
};
