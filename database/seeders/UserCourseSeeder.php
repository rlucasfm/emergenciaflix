<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserCourse;

class UserCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'user_id' => 1,
                'course_id' => 44599,
                'complete_lessons' => 0,
                'completed' => 0,
                'buy_platform' => 'Manual'
            ],
            [
                'user_id' => 1,
                'course_id' => 48880,
                'complete_lessons' => 0,
                'completed' => 0,
                'buy_platform' => 'Manual'
            ],
            [
                'user_id' => 1,
                'course_id' => 43052,
                'complete_lessons' => 0,
                'completed' => 0,
                'buy_platform' => 'Manual'
            ]
        ];

        foreach($data as $d)
        {
            UserCourse::create($d);
        }
    }
}
