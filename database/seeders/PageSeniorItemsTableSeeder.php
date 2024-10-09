<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PageSeniorItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_senior_items')->insert([
            [
                'id' => 1,
                'name' => 'Senior',
                'detail' => NULL,
                'status' => 'Show',
                'seo_title' => 'kingLit senior management',
                'seo_meta_description' => 'kingLit senior managements',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}