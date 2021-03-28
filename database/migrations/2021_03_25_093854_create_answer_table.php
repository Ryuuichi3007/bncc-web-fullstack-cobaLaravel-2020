<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer', function (Blueprint $table) {
            $table->id();
            $table->string('content');
            $table->unsignedBigInteger('question_id');
            $table->unsignedBigInteger('profil_id');
            $table->timestamps();
        });

        Schema::table('answer', function (Blueprint $table) {
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
        Schema::drop('answer');
    }
}
