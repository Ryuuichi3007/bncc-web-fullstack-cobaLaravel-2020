<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikeDislikeQuestions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ld_questions', function (Blueprint $table) {
            $table->id();
            $table->integer('poin');
            $table->unsignedBigInteger('question_id');
            $table->unsignedBigInteger('profil_id');
        });

        Schema::table('ld_questions', function (Blueprint $table) {
            $table->foreign('profil_id')->references('id')->on('profil');
            $table->foreign('question_id')->references('id')->on('questions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ld_questions');
    }
}
