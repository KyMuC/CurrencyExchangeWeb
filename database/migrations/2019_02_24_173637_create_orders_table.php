<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->char('source_currency_code', 3);
            $table->char('target_currency_code', 3);
            $table->float('source_currency_amount',25,5);
            $table->date('date');
            $table->unsignedInteger('office_id');
            $table->string('customer_passport_number',20);
            $table->enum('status', ['Moderation','Pending','Completed','Declined']);
            $table->foreign('source_currency_code')->references('currency_code')->on('currency');
            $table->foreign('target_currency_code')->references('currency_code')->on('currency');
            $table->foreign('office_id')->references('office_id')->on('exchange_office');
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
        Schema::dropIfExists('orders');
    }
}
