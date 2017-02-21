<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSimploniensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simploniens', function (Blueprint $table){
          $table->increments('id');
          $table->string('nom');
          $table->string('prenom');
          $table->string('email');
          $table->integer('telephone')->nullable();
          $table->integer('code_postal');
          $table->string('ville_formation');
          $table->integer('promo');
          $table->string('github')->nullable();
          $table->string('cv')->nullable();
          $table->text('punchline')->nullable();
          $table->string('linkedin')->nullable();
          $table->string('twitter')->nullable();
          $table->string('facebook')->nullable();
          $table->string('site_perso')->nullable();
          $table->string('blog')->nullable();
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
