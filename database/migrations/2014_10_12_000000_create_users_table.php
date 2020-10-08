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
        Schema::create('users', function (Blueprint $table) {
            $table->string('email')->unique();
            $table->string('name');
            $table->string('nameyomi');
            $table->string('age');
            $table->string('sex');
            $table->string('tourokubi');
            $table->string('login');
            $table->string('it');
            $table->string('grade');
            $table->string('subjects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
