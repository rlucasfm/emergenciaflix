<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(UserCourseSeeder::class);
        $this->call(APHModuleSeeder::class);
        $this->call(APHLessonSeeder::class);
        $this->call(InjetaveisModuleSeeder::class);
        $this->call(InjetaveisLessonSeeder::class);
        $this->call(SBVModulesSeeder::class);
        $this->call(LessonSBVSeeder::class);
    }
}
