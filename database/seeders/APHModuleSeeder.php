<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class APHModuleSeeder extends Seeder
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
                'course_id' => '44374',
                'order' => 1,
                'name' => 'Módulo 1'
            ],
            [
                'course_id' => '44374',
                'order' => 2,
                'name' => 'Módulo 2'
            ],
            [
                'course_id' => '44374',
                'order' => 3,
                'name' => 'Módulo 3'
            ],
            [
                'course_id' => '44374',
                'order' => 4,
                'name' => 'Módulo 4'
            ],
            [
                'course_id' => '44374',
                'order' => 5,
                'name' => 'Módulo 5'
            ],
            [
                'course_id' => '44374',
                'order' => 6,
                'name' => 'Diretrizes 2020 - Aulas Exclusivas'
            ],
            [
                'course_id' => '44374',
                'order' => 7,
                'name' => 'Certificados'
            ],
        ];

        foreach ($data as $d) {
            DB::table('course_modules')->insert($d);
        }
    }
}
