<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PageProjectItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_project_items')->insert([
            [
                'id' => 1,
                'name' => 'Projects',
                'detail' => '',
                'status' => 'Show',
                'seo_title' => 'Projects',
                'seo_meta_description' => 'Project Page Meta Description',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}