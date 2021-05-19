<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
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
                'id' => 44599,
                'name' => 'Transporte Aeromédico',
                'description' => 'Curso de Transporte Aeromédico.',
                'qnt_lessons' => 40,
                'qnt_hours' => 80,
                'link' => 'course',
                'img' => 'images/cover-aero.jpg',
                'modules' => 3
            ],
            [
                'id' => 48880,
                'name' => 'Injetáveis',
                'description' => 'Curso de Injetáveis e cálculo de medicamentos.',
                'qnt_lessons' => 14,
                'qnt_hours' => 30,
                'link' => '/',
                'img' => 'images/cover-inje.jpg',
                'modules' => 3
            ],
            [
                'id' => 43052,
                'name' => 'Suporte Básico de Vida e DEA',
                'description' => 'Curso sobre Suporte Básico de Vida e DEA.',
                'qnt_lessons' => 15,
                'qnt_hours' => 30,
                'link' => '/',
                'img' => 'images/cover-sbv.jpg',
                'modules' => 3
            ],
            [
                'id' => 44374,
                'name' => 'Curso de APH',
                'description' => 'Curso com o objetivo de instrumentalizar profissionais, estudantes e amantes do APH, para que possa prestar um atendimento sistematizado á vítima de trauma e de outras condições clínicas.',
                'qnt_lessons' => 15,
                'qnt_hours' => 30,
                'link' => '/',
                'img' => 'images/cover-80.jpg',
                'modules' => 3
            ]
        ];

        foreach($data as $d)
        {
            Course::create($d);
        }
    }
}
