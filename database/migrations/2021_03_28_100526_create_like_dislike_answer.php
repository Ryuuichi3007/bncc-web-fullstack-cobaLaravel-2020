<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikeDislikeAnswer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ld_answer', function (Blueprint $table) {
            $table->id();
            $table->integer('poin');
            $table->unsignedBigInteger('answer_id');
            $table->unsignedBigInteger('profil_id');
        });

        Schema::table('ld_answer', function (Blueprint $table) {
            $table->foreign('profil_id')->references('id')->on('profil');
            $table->foreign('answer_id')->references('id')->on('answer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ld_answer');
    }
}
