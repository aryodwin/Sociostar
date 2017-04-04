<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Username', function (Blueprint $table) {
            $table->integer('id');
            $table->string('name');
            $table->string('address');
            $table->integer('phone');
            $table->string('email')->unique();
            $table->date('birthday');
            $table->char('gender',1);
            $table->timestamp('register_at');
            
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Username');
    }
}
