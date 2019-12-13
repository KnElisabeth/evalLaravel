<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('races', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('life');
            $table->timestamps();
        });
        Schema::table('races', function (Blueprint $table){
            $table->unsignedBigInteger('class_id');
            //genre_id est le nom que je choisis de donner à ma foreignKey     
            $table->foreign('class_id')->references('id')->on('classes');
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
        Schema::dropIfExists('races');
    }
}
