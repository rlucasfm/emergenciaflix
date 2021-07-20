<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name' => 'ADMIN',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin')
        ];

        User::create($data);
    }
}
