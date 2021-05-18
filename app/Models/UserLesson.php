<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLesson extends Model
{
    protected $table = "user_lesson";
    protected $fillable = [
        'completed',
        'user_id',
        'course_id',
        'lesson_id',
        'annotations'
    ];
    use HasFactory;
}
