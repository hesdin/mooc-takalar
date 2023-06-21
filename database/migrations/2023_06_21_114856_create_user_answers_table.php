<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_answers', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('quiz_id');
            $table->unsignedBigInteger('question_id');
            $table->unsignedBigInteger('selected_choice_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('gtk')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('quiz_id')->references('id')->on('quizzes')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('question_id')->references('id')->on('questions')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('selected_choice_id')->references('id')->on('questions')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_answers');
    }
};
