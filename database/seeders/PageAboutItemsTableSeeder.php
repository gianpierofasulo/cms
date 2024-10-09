<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PageAboutItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_about_items')->insert([
            [
                'id' => 1,
                'name' => 'About Us',
                'about_us_photo' => 'about_us_image-.png',
                'vision_photo' => 'vision_image-.png',
                'mession_photo' => 'mession_image-.png',
                'detail' => 'Dummy text',
                'vision' => 'Some Dummy data',
                'mession' => 'another dummy data',
                'objective' => 'Dummy data also',
                'core_value' => 'Show',
                'status' => 'meta title',
                'seo_title' => 'meta description',
                'seo_meta_description' => '2024-04-18 13:37:54',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
