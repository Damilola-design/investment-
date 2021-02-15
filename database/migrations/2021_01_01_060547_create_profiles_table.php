<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->text('full_name')->nullable();;
            $table->string('email')->nullable();;
            $table->string('amount')->nullable();;
            $table->string('plan')->nullable();;
            $table->string('Period')->nullable();;
            $table->string('country')->nullable();;
            $table->string('address')->nullable();;
            $table->string('number')->nullable();;
            $table->text('valid_id')->nullable();;
            $table->string('passport')->nullable();;
            $table->string('status')->nullable();;
            $table->string('deformity')->nullable();;
            $table->string('details')->nullable();;
            $table->string('ill')->nullable();;
            $table->string('physician')->nullable();;
            $table->string('bank_name')->nullable();;
            $table->text('acc_name')->nullable();;
            $table->string('acc_number')->nullable();;
            $table->string('interest_payment')->nullable();;
            $table->string('refer_name')->nullable();;
            $table->string('cid_number')->nullable();;
            $table->string('refer_number')->nullable();;
            $table->string('terms')->nullable();;
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
        Schema::dropIfExists('profiles');
    }
}
