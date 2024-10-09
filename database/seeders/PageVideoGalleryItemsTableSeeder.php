<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PageVideoGalleryItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_video_gallery_items')->insert([
            [
                'id' => 1,
                'name' => 'Video Gallery',
                'detail' => '',
                'status' => 'Show',
                'seo_title' => 'Video Gallery',
                'seo_meta_description' => 'Video Gallery',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}