<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_bills', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('bill_num');
            $table->double('total_bill');
            $table->integer('quantity');
            $table->double('discount');
            $table->double('Paied');
            $table->double('Remain');
            $table->String('bill_date');
            $table->String('Notes');

            $table->foreign('company_id')->references('id')->on('company')->onDelete('company');
            $table->foreign('user_id')->references('id')->on('User')->onDelete('cascade');
            
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
        Schema::dropIfExists('company_bills');
    }
}
