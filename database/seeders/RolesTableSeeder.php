<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    // public function run()
    // {
    //     DB::table('roles')->updateOrInsert(
    //         ['id' => 1],
    //         ['role_name' => 'Admin', 'created_at' => '2024-04-18 15:43:12', 'updated_at' => '2024-04-18 15:43:12']
    //     );

    //     DB::table('roles')->updateOrInsert(
    //         ['id' => 4],
    //         ['role_name' => 'Manager', 'created_at' => '2024-04-18 15:43:12', 'updated_at' => '2024-04-18 15:43:12']
    //     );

    //     DB::table('roles')->updateOrInsert(
    //         ['id' => 5],
    //         ['role_name' => 'Editor', 'created_at' => '2024-04-18 15:43:12', 'updated_at' => '2024-04-18 15:43:12']
    //     );

    //     DB::table('roles')->updateOrInsert(
    //         ['id' => 7],
    //         ['role_name' => 'Human Resource', 'created_at' => '2024-04-18 15:43:12', 'updated_at' => '2024-04-18 15:43:12']
    //     );

    //     DB::table('roles')->updateOrInsert(
    //         ['id' => 8],
    //         ['role_name' => 'Operation', 'created_at' => '2024-04-18 15:43:12', 'updated_at' => '2024-04-18 15:43:12']
    //     );

    //     DB::table('roles')->updateOrInsert(
    //         ['id' => 9],
    //         ['role_name' => 'test', 'created_at' => '2024-04-18 15:43:12', 'updated_at' => '2024-04-18 15:43:12']
    //     );
    // }
    public function run()
    {
        DB::table('roles')->insert([
            [
                'id' => 1,
                'role_name' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'role_name' => 'Manager',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'role_name' => 'Editor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'role_name' => 'Human Resource',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'role_name' => 'Operation',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 9,
                'role_name' => 'test',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
