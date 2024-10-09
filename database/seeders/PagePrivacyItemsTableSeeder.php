<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PagePrivacyItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_privacy_items')->insert([
            [
                'id' => 1,
                'name' => 'Privacy Policy',
                'detail' => 'privacy policy content',
                'status' => 'Show',
                'seo_title' => 'meta Privacy Policy',
                'seo_meta_description' => 'meta Privacy Policy',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}