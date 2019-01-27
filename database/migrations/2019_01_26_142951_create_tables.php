<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currency', function (Blueprint $table) {
            $table->char('currency_code', 3);
            $table->primary('currency_code');
            $table->string('currency_name', 30);
            $table->float('cash_limit', 25, 5);
        });

        Schema::create('exchange_office', function (Blueprint $table) {
            $table->increments('office_id');
            $table->string('adress', 100);
        });

        Schema::create('operation', function (Blueprint $table) {
            $table->increments('operation_id');
            $table->foreign('exchange_office')->references('office_id')->on('exchange_office');
            $table->dateTime('datetime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('currency');
    }
}
