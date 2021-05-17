<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserLesson extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_lesson', function (Blueprint $table) {
            $table->id();
            $table->boolean('completed');
            $table->foreignid('user_id')->reference('id')->on('users');
            $table->foreignid('course_id')->reference('id')->on('courses');
            $table->tinyInteger('module')->default(1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_lesson');
    }
}
