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
            $table->string('name', 128);
            $table->string('nickname', 64)->nullable();
            $table->string('email')->unique();
            $table->string('phone', 16);
            $table->string('photo_profile', 128)->nullable();
            $table->integer('total_generate')->default(0);
            $table->string('interest', 128)->nullable();
            $table->text('bio')->nullable();
            $table->enum('role', ['admin', 'user'])->default('user');
            $table->string('password');
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
