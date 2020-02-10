<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->String('NAME');
            $table->integer('QUANTITY');
            $table->integer('Alarm_QUANTITY');
            $table->double('PRICE');
            $table->double('Gomla');
            $table->double('Profit');
            $table->text('BARCODE');           
            $table->String('date_added');
            $table->String('Expiration_Date');
            $table->integer('classification_id')->unsigned();
            $table->integer('company_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('Bill_num')->unsigned();

            $table->foreign('classification_id')->references('id')->on('Store_Classification')->onDelete('cascade');
    $table->foreign('company_id')->references('id')->on('company')->onDelete('company');
    $table->foreign('user_id')->references('id')->on('User')->onDelete('cascade');
    $table->foreign('Bill_num')->references('bill_num')->on('company_bill')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
