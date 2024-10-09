<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PageBlogItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_blog_items')->insert([
            [
                'id' => 1,
                'name' => 'Blog',
                'detail' => null,
                'status' => 'Show',
                'seo_title' => 'kingLit blog and news',
                'seo_meta_description' => 'kingLit meta description',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
