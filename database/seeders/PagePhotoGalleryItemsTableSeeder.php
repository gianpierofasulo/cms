<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PagePhotoGalleryItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_photo_gallery_items')->insert([
            [
                'id' => 1,
                'name' => 'Photo Gallery',
                'detail' => '',
                'status' => 'Show',
                'seo_title' => 'Photo Gallery',
                'seo_meta_description' => 'Photo Gallery',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}