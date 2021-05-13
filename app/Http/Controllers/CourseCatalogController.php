<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\UserCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseCatalogController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = [];

        $user_id = Auth::id();
        $user_courses = UserCourse::where('user_id', $user_id)->get();
        $courses_aval = Course::join('user_course', 'courses.id', '=', 'user_course.course_id')
        ->select('courses.id', 'courses.name', 'courses.description', 'courses.link', 'courses.img', 'courses.sell_link', 'user_course.complete_lessons', 'user_course.completed')
        ->get()
        ->toArray();

        $data['courses'] = $courses_aval;

        return view('principal', $data);
    }
}
