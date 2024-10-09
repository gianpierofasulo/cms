<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PageDeveloperItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_developer_items')->insert([
            [
                'id' => 1,
                'name' => 'Developer',
                'detail' => '',
                'status' => 'Show',
                'seo_title' => 'developer',
                'seo_meta_description' => 'web developer, system administrator, system developer, networking',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}