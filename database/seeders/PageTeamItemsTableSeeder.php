<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PageTeamItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_team_items')->insert([
            [
                'id' => 1,
                'name' => 'Team Member',
                'detail' => '',
                'status' => 'Show',
                'seo_title' => 'Team Member',
                'seo_meta_description' => 'Team Member',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}