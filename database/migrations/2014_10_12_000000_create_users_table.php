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
            $table->BigIncrements('id');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('role')->default('user');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('first_name')->nullable();;
            $table->string('last_name')->nullable();;
            $table->string('nickname')->nullable();
            $table->string('address')->nullable();
            $table->string('number')->nullable();
            $table->string('country')->nullable();
            $table->string('gender')->nullable();;
            $table->string('termsCheckbox')->nullable();;
            $table->string('date')->nullable();
            $table->string('bank')->nullable();
            $table->string('acc_number')->nullable();
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
