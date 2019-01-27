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

        Schema::create('exchange_rate_central_bank', function (Blueprint $table) {
            $table->increments('exchange_rate_central_bank_id');
            $table->char('source_currency_code', 3);
            $table->char('target_currency_code', 3);
            $table->foreign('source_currency_code')->references('currency_code')->on('currency');
            $table->foreign('target_currency_code')->references('currency_code')->on('currency');
            $table->float('exchange_rate', 25,5);
            $table->date('date');
        });

        Schema::create('exchange_rate', function (Blueprint $table) {
            $table->increments('exchange_rate_id');
            $table->char('source_currency_code', 3);
            $table->char('target_currency_code', 3);
            $table->foreign('source_currency_code')->references('currency_code')->on('currency');
            $table->foreign('target_currency_code')->references('currency_code')->on('currency');
            $table->float('exchange_rate', 25,5);
            $table->date('date');
            $table->integer('office_id');

            $table->foreign('office_id')->references('office_id')->on('exchange_office');
            $table->foreign('exchange_rate_id')->references('exchange_rate_central_bank_id')->on('exchange_rate_central_bank');
        });

        Schema::create('banknotes_outflux', function (Blueprint $table) {
            $table->integer('operation_id');
            $table->integer('banknote_id');
            $table->foreign('operation_id')->references('operation_id')->on('operation');
            $table->foreign('banknote_id')->references('banknote_id')->on('banknote');
            $table->primary(['operation_id', 'banknote_id']);
        });

        Schema::create('banknotes_influx', function (Blueprint $table) {
            $table->integer('operation_id');
            $table->integer('banknote_id');
            $table->foreign('operation_id')->references('operation_id')->on('operation');
            $table->foreign('banknote_id')->references('banknote_id')->on('banknote');
            $table->primary(['operation_id', 'banknote_id']);
        });

        Schema::create('cash_in_transit_company', function (Blueprint $table) {
            $table->increments('company_id');
            $table->string('company_name', 30);
        });

        Schema::create('cash_in_transit_car', function (Blueprint $table) {
            $table->increments('car_id');
            $table->string('car_model', 30);
            $table->string('car_model', 15);
            $table->integer('company_id');
            $table->foreign('company_id')->references('company_id')->on('cash_in_transit_company');
        });
        
        Schema::create('operation_cash_in_transit', function (Blueprint $table) {
            $table->integer('operation_id');
            $table->primary('operation_id');
            $table->integer('car_id');
            $table->foreign('operation_id')->references('operation_id')->on('operation');
            $table->foreign('car_id')->references('car_id')->on('cash_in_transit_car');
        });

        Schema::create('employee', function (Blueprint $table) {
            $table->string('passport_number', 20);
            $table->primary('passport_number');
            $table->string('first_name', 30);
            $table->string('last_name', 30);
            $table->date('date_of_birth');
            $table->integer('exchange_office_id');
            $table->foreign('exchange_office_id')->references('office_id')->on('exchange_office');
        });

        Schema::create('customer', function (Blueprint $table) {
            $table->string('passport_number', 20);
            $table->primary('passport_number');
            $table->string('first_name', 30);
            $table->string('last_name', 30);
            $table->date('date_of_birth');
        });

        Schema::create('operation_exchange', function (Blueprint $table) {
            $table->integer('operation_id');
            $table->primary('operation_id');
            $table->integer('exchange_rate_id');
            $table->string('customer_passport_number');
            $table->foreign('operation_id')->references('operation_id')->on('operation');
            $table->foreign('exchange_rate_id')->references('exchange_rate_id')->on('exchange_rate');
            $table->foreign('customer_passport_number')->references('passport_number')->on('customer');
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
