<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SBVModulesSeeder extends Seeder
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
                'course_id' => '43052',
                'order' => 1,
                'name' => 'Módulo 1'
            ],
            [
                'course_id' => '43052',
                'order' => 2,
                'name' => 'Módulo 2'
            ],
            [
                'course_id' => '43052',
                'order' => 3,
                'name' => 'Módulo 3'
            ],
            [
                'course_id' => '43052',
                'order' => 4,
                'name' => 'Módulo 4'
            ],
            [
                'course_id' => '43052',
                'order' => 5,
                'name' => 'Certificados'
            ],
        ];

        foreach ($data as $d) {
            DB::table('course_modules')->insert($d);
        }
    }
}
