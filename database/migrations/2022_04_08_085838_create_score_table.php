<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('score', function (Blueprint $table) {
            $table->id();
            $table->integer('id_u');
            $table->integer('id_g');
            
            $table->integer('duration');
            $table->timestamps();

            $table->foreign('id_u')->references('id')->on('users');
            $table->foreign('id_g')->references('id')->on('game');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('score');
    }
}
