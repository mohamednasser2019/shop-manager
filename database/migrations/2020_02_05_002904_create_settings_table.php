<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            
            $table->String('btnPay');
            $table->String('btnStore');
            $table->String('btnCustomers');
            $table->String('btnEmp');
            $table->String('btnOutGoing');
            $table->String('btnMabi3at');
            $table->String('btnCompanies');
            $table->String('btnRebh');
            $table->String('btnSetting');

            $table->integer('user_id')->unsigned();
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
        Schema::dropIfExists('settings');
    }
}
