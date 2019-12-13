<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('sexe');
            $table->integer('age');
            $table->integer('weight');
            $table->integer('height');
            $table->timestamps();
        });
        Schema::table('animals', function (Blueprint $table){
            $table->unsignedBigInteger('race_id');
            //genre_id est le nom que je choisis de donner à ma foreignKey     
            $table->foreign('race_id')->references('id')->on('races');
            // le on('genres') est la seule connexion à la base genres
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animals');
    }
}
