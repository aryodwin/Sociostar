<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Items', function (Blueprint $table) {
            $table->increments('id'); 
            $table->string('name');
            $table->longText('desc');
            $table->integer('id_cat');
            $table->integer('price');
            $table->integer('amount');
            $table->integer('id_fp');
            $table->integer('id_ngo');
            $table->timestamp('upload_at');
            $table->integer('publish');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Items');
    }
}
