<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_questions', function (Blueprint $table) {
            $table->id();
            $table->string('content');
            $table->date('created_at');
            $table->unsignedBigInteger('question_id');
            $table->unsignedBigInteger('profil_id');
        });

        Schema::table('comment_questions', function (Blueprint $table) {
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
        Schema::drop('comment_questions');
    }
}
