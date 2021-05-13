<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserCourse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_course', function (Blueprint $table) {
            $table->id();
            $table->foreignid('user_id')->reference('id')->on('users');
            $table->foreignid('course_id')->reference('id')->on('courses');
            $table->tinyInteger('complete_lessons')->default(0);
            $table->boolean('completed');
            $table->date('due_date')->nullable();
            $table->string('buy_platform');
            $table->string('buy_status', 32)->nullable();
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
        Schema::dropIfExists('user_course');
    }
}
