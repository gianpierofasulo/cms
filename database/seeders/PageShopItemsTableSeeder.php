<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PageShopItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_shop_items')->insert([
            [
                'id' => 1,
                'name' => 'Shop',
                'detail' => NULL,
                'status' => 'Show',
                'seo_title' => 'meta title Shop',
                'seo_meta_description' => 'CMSMULTI data',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
