<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PageBranchItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_branch_items')->insert([
            [
                'id' => 1,
                'name' => 'Branch',
                'detail' => null,
                'status' => 'Show',
                'seo_title' => 'kingLit branches',
                'seo_meta_description' => 'kingLit is a leading technological company based in Ethiopia.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}