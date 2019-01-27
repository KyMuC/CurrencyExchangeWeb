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
            $table->integer('exchange_office');
            $table->foreign('exchange_office')->references('office_id')->on('exchange_office');
            $table->dateTime('datetime');
        });

        Schema::create('banknote', function (Blueprint $table) {
            $table->increments('banknote_id');
            $table->char('currency_code', 3);
            $table->foreign('currency_code')->references('currency_code')->on('currency');
            $table->float('nominal_value', 25, 5);
        });


        Schema::create('valid_nominal_value', function (Blueprint $table) {
            $table->increments('id');
            $table->char('currency_code', 3);
            $table->foreign('currency_code')->references('currency_code')->on('currency');
            $table->float('valid_nominal_value', 25, 5);
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
