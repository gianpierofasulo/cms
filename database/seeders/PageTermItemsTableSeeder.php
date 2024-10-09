<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PageTermItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_term_items')->insert([
            [
                'id' => 1,
                'name' => 'Terms and Conditions',
                'detail' => 'terms and conditions goes here',
                'status' => 'Show',
                'seo_title' => 'meta terms and conditions',
                'seo_meta_description' => 'meta terms and conditions',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}