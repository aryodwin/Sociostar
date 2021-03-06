<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNGOsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NGO', function (Blueprint $table) {
            $table->integer('id')->primary(); //['desc','id_bank','no_bank','bank_name']
            $table->text('desc');
            $table->integer('id_bank');
            $table->integer('no_bank');
            $table->string('bank_name');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('NGO');
    }
}
