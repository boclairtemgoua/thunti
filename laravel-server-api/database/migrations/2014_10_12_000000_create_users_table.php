<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('username')->nullable();
            $table->string('lastName')->nullable();
            $table->string('firstName')->nullable();
            $table->string('avatar')->nullable();
            $table->string('slug')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('isDelete')->default(false);
            $table->date('createdAt')->default(now());
            $table->date('updatedAt')->default(now());
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
