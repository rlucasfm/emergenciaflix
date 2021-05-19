<?php

namespace App\Http\Controllers;

use App\Models\UserLesson;
use Illuminate\Http\Request;

class UserLessonController extends Controller
{
    public function annotation(Request $request)
    {
        $user_lesson_id = $request->input('user_lesson_id');
        $annotation = $request->input('annotation');

        $user_lesson = UserLesson::find($user_lesson_id);
        $user_lesson->annotations = $annotation;
        $user_lesson->save();
        echo "Success";
    }

    public function completed(Request $request)
    {
        $user_lesson_id = $request->input('user_lesson_id');
        $completed = $request->input('completed');

        $user_lesson = UserLesson::find($user_lesson_id);
        $user_lesson->completed = $completed;
        $user_lesson->save();
        echo "Success";
    }
}
