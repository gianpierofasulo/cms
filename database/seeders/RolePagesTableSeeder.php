<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class RolePagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_pages')->insert([
            ['id' => 1, 'page_title' => 'General Settings', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'page_title' => 'Page Settings', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'page_title' => 'Footer Columns', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'page_title' => 'Sliders', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'page_title' => 'Blog Section', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'page_title' => 'Dynamic Pages', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'page_title' => 'Admin User Section', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'page_title' => 'Menu Manage', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'page_title' => 'Project', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10, 'page_title' => 'Career Section', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 11, 'page_title' => 'Photo Gallery', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 12, 'page_title' => 'Video Gallery', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 13, 'page_title' => 'Product Section', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 14, 'page_title' => 'Order Section', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 15, 'page_title' => 'Customer Section', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 16, 'page_title' => 'Why Choose Us', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 17, 'page_title' => 'Service', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 18, 'page_title' => 'Testimonial', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 19, 'page_title' => 'Team Member', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 20, 'page_title' => 'FAQ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 21, 'page_title' => 'Email Template', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 22, 'page_title' => 'Subscriber Section', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 23, 'page_title' => 'Social Media', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 24, 'page_title' => 'Branch', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 25, 'page_title' => 'Folders', 'created_at' => '2023-02-15 10:22:35', 'updated_at' => now()],
            ['id' => 26, 'page_title' => 'Counter', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 27, 'page_title' => 'permissions', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 29, 'page_title' => 'sharesubscribe', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}