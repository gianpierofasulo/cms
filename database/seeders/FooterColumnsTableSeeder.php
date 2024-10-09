<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class FooterColumnsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footer_columns')->insert([
            [
                'id' => 1,
                'column_item_text' => 'Home',
                'column_item_url' => 'https://www.demo.devethio.com/',
                'column_item_order' => 1,
                'column_name' => 'Column 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'column_item_text' => 'Blog',
                'column_item_url' => 'https://www.demo.devethio.com/blog',
                'column_item_order' => 2,
                'column_name' => 'Column 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'column_item_text' => 'Contact us',
                'column_item_url' => 'https://www.demo.devethio.com/contact',
                'column_item_order' => 3,
                'column_name' => 'Column 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'column_item_text' => 'Jobs',
                'column_item_url' => 'https://www.demo.devethio.com/career',
                'column_item_order' => 1,
                'column_name' => 'Column 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'column_item_text' => 'Our Services',
                'column_item_url' => 'https://www.demo.devethio.com/services',
                'column_item_order' => 2,
                'column_name' => 'Column 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'column_item_text' => 'FAQ',
                'column_item_url' => 'https://www.demo.devethio.com/faq',
                'column_item_order' => 3,
                'column_name' => 'Column 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}