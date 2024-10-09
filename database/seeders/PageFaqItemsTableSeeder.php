<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PageFaqItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_faq_items')->insert([
            [
                'id' => 1,
                'name' => 'FAQ',
                'detail' => '',
                'status' => 'Show',
                'seo_title' => 'FAQ',
                'seo_meta_description' => 'FAQ',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}