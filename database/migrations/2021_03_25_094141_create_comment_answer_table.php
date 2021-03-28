<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_answer', function (Blueprint $table) {
            $table->id();
            $table->string('content');
            $table->date('created_at');
            $table->unsignedBigInteger('answer_id');
            $table->unsignedBigInteger('profil_id');
        });

        Schema::table('comment_answer', function (Blueprint $table) {
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
        Schema::drop('comment_answer');
    }
}
