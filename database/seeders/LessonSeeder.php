<?php

namespace Database\Seeders;

use App\Models\Lesson;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
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
                'course_id' => 44599,
                'course_module' => 1,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Aula teste 1',
                'lesson_description' => 'Descricao teste 1',
                'lesson_content' => 'Content test 1',
            ],
            [
                'course_id' => 44599,
                'course_module' => 2,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Aula teste 2',
                'lesson_description' => 'Descricao teste 2',
                'lesson_content' => 'Content test 2',
            ],
            [
                'course_id' => 44599,
                'course_module' => 3,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Aula teste 3',
                'lesson_description' => 'Descricao teste 3',
                'lesson_content' => 'Content test 3',
            ],
            [
                'course_id' => 44599,
                'course_module' => 4,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Aula teste 4',
                'lesson_description' => 'Descricao teste 4',
                'lesson_content' => 'Content test 4',
            ],
            [
                'course_id' => 44599,
                'course_module' => 5,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Aula teste 5',
                'lesson_description' => 'Descricao teste 5',
                'lesson_content' => 'Content test 5',
            ],
            [
                'course_id' => 44599,
                'course_module' => 6,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Aula teste 6',
                'lesson_description' => 'Descricao teste 6',
                'lesson_content' => 'Content test 6',
            ],
            [
                'course_id' => 44599,
                'course_module' => 7,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Aula teste 7',
                'lesson_description' => 'Descricao teste 7',
                'lesson_content' => 'Content test 7',
            ],
            [
                'course_id' => 48880,
                'course_module' => 1,
                'module_order' => 1,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Aula teste 1',
                'lesson_description' => 'Descricao teste 1',
                'lesson_content' => 'Content test 1',
            ],
            [
                'course_id' => 48880,
                'course_module' => 2,
                'module_order' => 1,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Aula teste 2',
                'lesson_description' => 'Descricao teste 2',
                'lesson_content' => 'Content test 2',
            ],
            [
                'course_id' => 48880,
                'course_module' => 2,
                'module_order' => 2,
                'lesson_icon' => 'far fa-play-circle',
                'lesson_title' => 'Aula teste 3',
                'lesson_description' => 'Descricao teste 3',
                'lesson_content' => 'Content test 3',
            ],
        ];

        foreach($data as $d)
        {
            Lesson::create($d);
        }
    }
}
