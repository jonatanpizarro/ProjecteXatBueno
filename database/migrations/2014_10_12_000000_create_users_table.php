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
            $table->increments('id');
            $table->string('name')->nullable(false);
            $table->string('nickname')->unique()->nullable(false);
            $table->string('email')->unique()->nullable(false);
            $table->string('password')->nullable(false);
<<<<<<< HEAD
            $table->string('rol')->nullable(false)->default("Cliente");
=======
>>>>>>> 9c18da2fd4a9a14ffc85a5301e9c9aea5f0f93e1
            $table->rememberToken();
            $table->timestamps();
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
