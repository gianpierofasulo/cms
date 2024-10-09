<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PageDocumentItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_document_items')->insert([
            [
                'id' => 1,
                'name' => 'Document',
                'detail' => null,
                'status' => 'Show',
                'seo_title' => 'CMSMULTI meta title',
                'seo_meta_description' => 'CMSMULTI meta description',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
