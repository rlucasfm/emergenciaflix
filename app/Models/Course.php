<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public static function get_available($id)
    {
        return self::join('user_course', 'courses.id', '=', 'user_course.course_id')
                    ->where('user_course.user_id', '=', $id)
                    ->select('courses.id', 'courses.name', 'courses.description', 'courses.link', 'courses.img', 'courses.sell_link', 'user_course.complete_lessons', 'user_course.completed')
                    ->get()
                    ->toArray();
    }
}
