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
      $table->string('last_name');
      $table->string('first_name');
      $table->string('email')->unique();
      $table->string('password');

      $table->longText('availability')->nullable();
      $table->longText('efforts')->nullable();
      $table->longText('computers')->nullable();
      $table->longText('heard_of')->nullable();

      $table->string('nationality')->nullable();
      $table->string('birth_date')->nullable();
      $table->string('gender')->nullable();
      $table->string('phone')->nullable();
      $table->string('postal_code')->nullable();
      $table->string('city')->nullable();
      $table->string('address')->nullable();
      $table->string('status')->nullable();
      $table->integer('number_pole_emploi')->nullable();
      $table->string('pole_emploi')->nullable();
      $table->string('number_social_security')->nullable();
      $table->string('obtained_diploma')->nullable();
      $table->string('cdd')->nullable();


      $table->longText('experience_programming')->nullable();
      $table->longText('course')->nullable();
      $table->string('english')->nullable();
      $table->longText('today')->nullable();

      $table->string('coding')->nullable();
      $table->string('profiles')->nullable();

      $table->longText('hero')->nullable();
      $table->longText('dev_qualities')->nullable();
      $table->longText('personal_goal')->nullable();
      $table->longText('dev_point')->nullable();
      $table->longText('superpower')->nullable();

      $table->boolean('application_sent')->default(false);

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
