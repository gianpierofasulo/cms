<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PageServiceItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_service_items')->insert([
            [
                'id' => 1,
                'name' => 'Services',
                'detail' => NULL,
                'status' => 'Show',
                'seo_title' => 'CMSMULTI Services',
                'seo_meta_description' => 'CMSMULTI is a leading technological company based in Ethiopia.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
