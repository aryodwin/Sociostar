<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Item_Transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_customer');
            $table->integer('id_ngo');
            $table->integer('id_fp');
            $table->integer('id_item');
            $table->integer('amount');
            $table->integer('id_bank');
            $table->integer('total');
            $table->timestamp('time');
            $table->string('confirm_photo');
            $table->datetime('confirm_time');
            $table->integer('paid_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Item_Transactions');
    }
}
