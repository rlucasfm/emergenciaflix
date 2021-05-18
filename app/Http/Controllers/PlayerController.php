<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\UserCourse;
use App\Models\UserLesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlayerController extends Controller
{
    public function __invoke(Request $request, $id)
    {
        $user_id = Auth::id();
        $lesson = Lesson::find($id)->toArray();

        $courses = UserCourse::where('course_id', $lesson['course_id'])->get();
        if(count($courses) == 0)
        {
            return back()->with('error', 'Você não tem acesso a esta aula');
        }

        try {
            $user_lesson = UserLesson::where('lesson_id', $id)->where('user_id', $user_id)->first()->toArray();
        } catch (\Throwable $th) {
            $user_lesson = UserLesson::create([
                'completed' => 0,
                'user_id' => $user_id,
                'course_id' => $lesson['course_id'],
                'lesson_id' => $lesson['id'],
                'annotations' => 'Nenhuma anotação'
            ])->toArray();
        }

        $last_mod = self::find_last_module($lesson['course_id']);
        $last_lesson = self::find_last_lesson($lesson['course_id'], $lesson['course_module']);
        $mod_now = intval($lesson['course_module']);
        $less_now = intval($lesson['module_order']);

        // NEXT
        if($less_now == $last_lesson)
        {
            if($mod_now == $last_mod)
            {
                $next = '#';
            } else {
                $next = Lesson::where('course_id', $lesson['course_id'])->where('course_module', $mod_now+1)->where('module_order', 1)->first()->getAttribute('id');
            }
        } else {
            $next = $less_now+1;
        }

        // PREVIOUS
        if($less_now == 1)
        {
            if($mod_now == 1)
            {
                $previous = '#';
            } else {
                $prev_last_lesson = self::find_last_lesson($lesson['course_id'], intval($lesson['course_module'])-1);
                $previous = Lesson::where('course_id', $lesson['course_id'])->where('course_module', $mod_now-1)->where('module_order', $prev_last_lesson)->first()->getAttribute('id');
            }
        } else {
            $previous = $less_now-1;
        }

        $previous = ($previous != '#') ? route('player', ['id' => $previous]) : $previous;
        $next = ($next != '#') ? route('player', ['id' => $next]) : $next;

        $data = [
            'lesson' => $lesson,
            'user_lesson' => $user_lesson,
            'previous_lesson' => $previous,
            'next_lesson' => $next
        ];
        // dd($user_lesson);
        return view('player', $data);
    }

    private static function find_last_module($course_id)
    {
        $course = Course::find($course_id)
                        ->getAttribute('modules');
        return $course;
    }

    private static function find_last_lesson($course_id, $module)
    {
        $course = Lesson::where('course_id', $course_id)
                        ->where('course_module', $module)
                        ->orderBy('module_order', 'desc')
                        ->first()
                        ->getAttribute('module_order');
        return $course;
    }
}
