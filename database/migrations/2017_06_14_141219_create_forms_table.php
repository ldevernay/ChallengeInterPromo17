<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('statut_form')->default('0');
            $table->string('prenom');
            $table->string('nom');
            $table->string('email')->unique();
            $table->string('date');
            $table->string('pays');
            $table->string('national');
            $table->string('adresse');
            $table->string('tel');
            $table->string('statut');
            $table->string('numpole');
            $table->string('secu');

            $table->string('etudes')->nullable();
            $table->string('parcours')->nullable();
            $table->string('anglais')->nullable();
            $table->string('motivation')->nullable();
            $table->string('superpouvoirs')->nullable();
            $table->string('codecademy')->nullable();
            $table->string('OCR')->nullable();
            $table->string('dispo8mois')->nullable();
            $table->string('contraintes')->nullable();
            $table->string('financement')->nullable();
            $table->string('notoriete')->nullable();
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
        //
    }
}
