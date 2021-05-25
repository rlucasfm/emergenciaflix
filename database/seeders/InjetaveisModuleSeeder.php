<?php

namespace Database\Seeders;

use App\Models\CourseModule;
use Illuminate\Database\Seeder;


class InjetaveisModuleSeeder extends Seeder
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
                'course_id' => '48880',
                'order' => 1,
                'name' => 'Módulo 1'
            ],
            [
                'course_id' => '48880',
                'order' => 2,
                'name' => 'Módulo 2'
            ],
            [
                'course_id' => '48880',
                'order' => 3,
                'name' => 'Módulo 3'
            ],
            [
                'course_id' => '48880',
                'order' => 4,
                'name' => 'Módulo 4'
            ],
            [
                'course_id' => '48880',
                'order' => 5,
                'name' => 'Certificados'
            ],
        ];

        foreach ($data as $d) {
            CourseModule::create($d);
        }
    }
}
