<?php

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
            //
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('registration_number', 9)->nullable();

            // social
            $table->string('github');
            $table->string('facebook');
            $table->string('google_plus');
            $table->string('twitter');

            // one-to-one
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::drop('profiles');
    }
}
