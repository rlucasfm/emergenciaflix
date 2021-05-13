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
                'link' => '/',
            ],
            [
                'id' => 48880,
                'name' => 'Injetáveis',
                'description' => 'Curso de Injetáveis e cálculo de medicamentos.',
                'qnt_lessons' => 14,
                'qnt_hours' => 30,
                'link' => '/',
            ],
            [
                'id' => 43052,
                'name' => 'Suporte Básico de Vida e DEA',
                'description' => 'Curso sobre Suporte Básico de Vida e DEA.',
                'qnt_lessons' => 15,
                'qnt_hours' => 30,
                'link' => '/',
            ],
        ];

        foreach($data as $d)
        {
            Course::create($d);
        }
    }
}
