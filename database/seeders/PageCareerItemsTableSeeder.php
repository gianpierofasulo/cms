<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PageCareerItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_career_items')->insert([
            [
                'id' => 1,
                'name' => 'Career',
                'detail' => null,
                'status' => 'Show',
                'seo_title' => 'CMSMULTI meta title',
                'seo_meta_description' => 'CMSMULTI',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
