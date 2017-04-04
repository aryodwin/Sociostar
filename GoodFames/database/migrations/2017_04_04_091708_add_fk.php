<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Username
        Schema::table('Username', function (Blueprint $table) {
            //
             $table->foreign('id')->references('id')->on('Login')->onDelete('cascade');
        });

        //Login
        Schema::table('Login', function (Blueprint $table) {
            //
            $table->foreign('type')->references('id')->on('Type')->onDelete('cascade');
        });

        //NGO
        Schema::table('NGO', function (Blueprint $table) {
            //
            $table->foreign('id')->references('id')->on('Login')->onDelete('cascade');
            $table->foreign('id_bank')->references('id')->on('Bank_Accounts')->onDelete('cascade');
        });

        //Items
        Schema::table('Items', function (Blueprint $table) {
            //
            $table->foreign('id_cat')->references('id')->on('Item_Catagories')->onDelete('cascade');
            $table->foreign('id_fp')->references('id')->on('Login')->onDelete('cascade');
            $table->foreign('id_ngo')->references('id')->on('Login')->onDelete('cascade');
        });

        //Items_Transaction
        Schema::table('Item_Transactions', function (Blueprint $table) {
            //
            $table->foreign('id_customer')->references('id')->on('Login')->onDelete('cascade');
            $table->foreign('id_ngo')->references('id')->on('Login')->onDelete('cascade');
            $table->foreign('id_fp')->references('id')->on('Login')->onDelete('cascade');
            $table->foreign('id_item')->references('id')->on('Items')->onDelete('cascade');
            $table->foreign('id_bank')->references('id')->on('Bank_Accounts')->onDelete('cascade');
        });

        //Famous_Person
        Schema::table('Famous_Person', function (Blueprint $table) {
            //
            $table->foreign('id')->references('id')->on('Login')->onDelete('cascade');
        });

        //Case
        Schema::table('Case', function (Blueprint $table) {
            //
            $table->foreign('id_NGO')->references('id')->on('NGO')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Username
        Schema::table('Username', function (Blueprint $table) {
            //
             $table->dropForeign(['id']);
        });

        //Login
        Schema::table('Login', function (Blueprint $table) {
            //
            $table->dropForeign(['type']);
        });

        //NGO
        Schema::table('NGO', function (Blueprint $table) {
            //
            $table->dropForeign(['id','id_bank']);
        });

        //Items
        Schema::table('Items', function (Blueprint $table) {
            //
            $table->dropForeign(['id_cat','id_fp','id_ngo']);
        });

        //Items_Transaction
        Schema::table('Item_Transactions', function (Blueprint $table) {
            //
            $table->dropForeign(['id_customer','id_ngo','id_fp','id_item','id_bank']);
        });

        //Famous_Person
        Schema::table('Famous_Person', function (Blueprint $table) {
            //
            $table->dropForeign(['id']);
        });

        //Case
        Schema::table('Case', function (Blueprint $table) {
            //
            $table->dropForeign(['id_NGO']);
        });
    }
}
