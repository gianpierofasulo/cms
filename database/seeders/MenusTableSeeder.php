<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            [
                'id' => 1,
                'menu_name' => 'Home',
                'menu_status' => 'Show',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'menu_name' => 'About',
                'menu_status' => 'Show',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'menu_name' => 'Services',
                'menu_status' => 'Show',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'menu_name' => 'Shop',
                'menu_status' => 'Show',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'menu_name' => 'Blog',
                'menu_status' => 'Show',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'menu_name' => 'Project',
                'menu_status' => 'Show',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'menu_name' => 'FAQ',
                'menu_status' => 'Show',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'menu_name' => 'Team Members',
                'menu_status' => 'Show',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 9,
                'menu_name' => 'Contact',
                'menu_status' => 'Show',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 10,
                'menu_name' => 'Career',
                'menu_status' => 'Show',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 11,
                'menu_name' => 'Photo Gallery',
                'menu_status' => 'Show',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 12,
                'menu_name' => 'Video Gallery',
                'menu_status' => 'Show',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 13,
                'menu_name' => 'Terms and Conditions',
                'menu_status' => 'Show',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 14,
                'menu_name' => 'Privacy Policy',
                'menu_status' => 'Show',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 15,
                'menu_name' => 'Branch',
                'menu_status' => 'Show',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 16,
                'menu_name' => 'Senior',
                'menu_status' => 'Show',
                'created_at' => '2023-02-13 11:54:34',
                'updated_at' => now(),
            ],
            [
                'id' => 17,
                'menu_name' => 'Board',
                'menu_status' => 'Show',
                'created_at' => '2023-02-13 11:55:04',
                'updated_at' => now(),
            ],
            [
                'id' => 18,
                'menu_name' => 'Developer',
                'menu_status' => 'Show',
                'created_at' => '2023-02-13 11:55:27',
                'updated_at' => now(),
            ],
            [
                'id' => 19,
                'menu_name' => 'Document',
                'menu_status' => 'Show',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}