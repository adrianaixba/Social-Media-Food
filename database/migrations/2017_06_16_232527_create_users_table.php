<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
//easy way to create tables without having to use sql
{
    /**
     * Run the migrations.
     *
     * @return void
     */
//    creates table in database
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
//           how the table is structured
            $table->increments('id');
            $table->timestamps();
            $table->String('email');
            $table->String('first_name');
            $table->String('password');
            $table->rememberToken(); //cookie in the user's computer, if still logged in
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
//    deleting and recreating tables
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
