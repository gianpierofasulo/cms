<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class SocialMediaItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('social_media_items')->insert([
            [
                'id' => 1,
                'social_url' => '#',
                'social_icon' => 'fab fa-twitter',
                'social_order' => 2,
                'created_at' => '2020-11-24 18:54:56',
                'updated_at' => '2020-11-24 19:07:08'
            ],
            [
                'id' => 2,
                'social_url' => '#',
                'social_icon' => 'fab fa-facebook-f',
                'social_order' => 1,
                'created_at' => '2020-11-24 18:56:23',
                'updated_at' => '2020-11-25 03:04:07'
            ],
            [
                'id' => 3,
                'social_url' => '#',
                'social_icon' => 'fab fa-linkedin-in',
                'social_order' => 3,
                'created_at' => '2020-11-24 19:07:28',
                'updated_at' => '2024-01-12 12:58:40'
            ],
            [
                'id' => 4,
                'social_url' => '#',
                'social_icon' => 'fab fa-pinterest-p',
                'social_order' => 4,
                'created_at' => '2020-11-24 19:07:41',
                'updated_at' => '2020-11-24 19:08:17'
            ],
            [
                'id' => 5,
                'social_url' => '#',
                'social_icon' => 'fab fa-instagram',
                'social_order' => 5,
                'created_at' => '2022-04-13 12:32:10',
                'updated_at' => '2022-04-13 12:32:10'
            ],
        ]);
    }
}