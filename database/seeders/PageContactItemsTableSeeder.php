<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PageContactItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_contact_items')->insert([
            [
                'id' => 1,
                'name' => 'Contact Us',
                'detail' => '<p><br></p>',
                'status' => 'Show',
                'contact_address' => "Your address City\r\nYour Country",
                'contact_email' => "demo@example.com\r\nsupport@example.com",
                'contact_phone' => "Office 1: +422222222222\r\nOffice 2: +433333333333",
                'seo_title' => 'kingLit meta title',
                'seo_meta_description' => 'kingLit meta descrption',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}