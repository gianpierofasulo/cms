<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            [
                'id' => 1,
                'name' => 'Nigus Abate',
                'email' => 'abatenigus0@gmail.com',
                'password' => Hash::make('12345678'),
                'token' => '47ae1ba656dbf389a263c83e1de60c4f5f361664711e92728cfde5dc46a3c164',
                'photo' => 'user-1.png',
                'role_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Mr Manager',
                'email' => 'manager@gmail.com',
                'password' => Hash::make('12345678'),
                'token' => '',
                'photo' => 'user-4.jpg',
                'role_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Mr Editor',
                'email' => 'editor@gmail.com',
                'password' => Hash::make('12345678'),
                'token' => '',
                'photo' => 'user-6.png',
                'role_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'name' => 'Nigus Abate',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345678'),
                'token' => '',
                'photo' => 'user-7.png',
                'role_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'name' => 'test user',
                'email' => 'test@gmail.com',
                'password' => Hash::make('12345678'),
                'token' => '',
                'photo' => 'user-8.png',
                'role_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
