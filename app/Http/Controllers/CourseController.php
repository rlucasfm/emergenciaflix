<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseModule;
use App\Models\Lesson;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function __invoke($id)
    {
        $course_data = Course::find($id);
        $modules = CourseModule::where('course_id', $id)->orderBy('order', 'asc')->get()->toArray();

        $lessons = Lesson::where('course_id', $id)
                            ->orderBy('module_order', 'asc')
                            ->get()
                            ->toArray();

        $lessons_mod = [];

        foreach($lessons as $l)
        {
            $lessons_mod[$l['course_module']][] = $l;
        }

        $data = [
            'course' => $course_data,
            'lessons' => $lessons_mod,
            'modules' => $modules
        ];

        // dd($data);
        return view('course_page', $data);
    }
}
