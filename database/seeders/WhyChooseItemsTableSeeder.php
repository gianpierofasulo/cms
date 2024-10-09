<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class WhyChooseItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('why_choose_items')->insert([
            [
                'id' => 1,
                'name' => 'Quick Support',
                'description' => 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.',
                'photo' => 'why-choose-1.svg',
                'created_at' => '2020-11-22 23:10:36',
                'updated_at' => '2023-12-30 08:36:59'
            ],
            [
                'id' => 2,
                'name' => 'Quality Service',
                'description' => 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.',
                'photo' => 'why-choose-2.svg',
                'created_at' => '2020-11-22 23:12:59',
                'updated_at' => '2023-12-30 08:37:12'
            ],
            [
                'id' => 3,
                'name' => 'Modern Technology',
                'description' => 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.',
                'photo' => 'why-choose-3.svg',
                'created_at' => '2020-11-22 23:13:16',
                'updated_at' => '2023-12-30 08:37:29'
            ],
            [
                'id' => 4,
                'name' => 'Best Communication',
                'description' => 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.',
                'photo' => 'why-choose-4.svg',
                'created_at' => '2020-11-22 23:13:32',
                'updated_at' => '2023-12-30 08:37:44'
            ],
            [
                'id' => 5,
                'name' => '100% Satisfaction',
                'description' => 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.',
                'photo' => 'why-choose-5.svg',
                'created_at' => '2020-11-22 23:13:47',
                'updated_at' => '2023-12-30 08:37:58'
            ],
            [
                'id' => 6,
                'name' => 'Security Protection',
                'description' => 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.',
                'photo' => 'why-choose-6.svg',
                'created_at' => '2020-11-22 23:14:10',
                'updated_at' => '2023-12-30 08:38:13'
            ],
        ]);
    }
}