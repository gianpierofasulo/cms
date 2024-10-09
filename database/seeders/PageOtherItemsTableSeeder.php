<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PageOtherItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_other_items')->insert([
            [
                'id' => 1,
                'seo_title' => 'Search',
                'seo_meta_description' => 'Search Page Description',
                'page_name' => 'Search Page',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'seo_title' => 'Cart',
                'seo_meta_description' => 'Cart Page Description',
                'page_name' => 'Cart Page',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'seo_title' => 'Checkout',
                'seo_meta_description' => 'Checkout Page Description',
                'page_name' => 'Checkout Page',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'seo_title' => 'Login',
                'seo_meta_description' => 'Login Page Description',
                'page_name' => 'Login Page',
                'created_at' => now(),
                'updated_at' => '2020-12-22 20:19:05'
            ],
            [
                'id' => 5,
                'seo_title' => 'Registration',
                'seo_meta_description' => 'Registration Page Description',
                'page_name' => 'Registration Page',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'seo_title' => 'Forget Password',
                'seo_meta_description' => 'Forget Password Page Description',
                'page_name' => 'Forget Password Page',
                'created_at' => now(),
                'updated_at' => '2020-12-22 20:19:07'
            ],
            [
                'id' => 7,
                'seo_title' => 'Customer Panel',
                'seo_meta_description' => 'Customer Page Description',
                'page_name' => 'Customer Panel Pages',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'seo_title' => 'Payment',
                'seo_meta_description' => 'Payment Page Description',
                'page_name' => 'Payment Page',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
