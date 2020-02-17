<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillPoductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_poducts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('Bill_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->integer('quantity');
            $table->double('Price');
            $table->integer('emp_id')->unsigned();
            
            $table->foreign('emp_id')->references('id')->on('employees')->onDelete('cascade');
            $table->foreign('Bill_id')->references('id')->on('company_bills')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('bill_poducts');
    }
}
