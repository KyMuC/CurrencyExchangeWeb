<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign(['source_currency_code']);
            $table->dropColumn('source_currency_code');
            $table->dropColumn('source_currency_amount');
            $table->float('target_currency_amount', 25, 5);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('target_currency_amount');
            $table->char('source_currency_code', 3);
            $table->float('source_currency_amount', 25, 5);
            $table->foreign('target_currency_code')->references('currency_code')->on('currency');
        });
    }
}
