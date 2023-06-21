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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("course_id");
            $table->unsignedBigInteger("curriculum_id");
            $table->text("comment_text");
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('gtk')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('course_id')->references('id')->on('courses')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('curriculum_id')->references('id')->on('curriculums')
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
        Schema::dropIfExists('comments');
    }
};
