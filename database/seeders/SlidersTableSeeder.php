<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            [
                'id' => 1,
                'slider_heading' => 'We are number one in creative business',
                'slider_text' => 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.',
                'slider_button_text' => 'Read More',
                'slider_button_url' => '#',
                'slider_photo' => 'slider-2.jpg',
                'created_at' => '2020-11-19 22:21:45',
                'updated_at' => '2024-01-12 13:01:24',
            ],
            [
                'id' => 2,
                'slider_heading' => 'We work for your success in real',
                'slider_text' => 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.',
                'slider_button_text' => 'Read More',
                'slider_button_url' => '#',
                'slider_photo' => 'slider-3.jpg',
                'created_at' => '2020-11-19 22:22:04',
                'updated_at' => '2024-01-12 13:02:28',
            ],
            [
                'id' => 3,
                'slider_heading' => 'Why Choose Us',
                'slider_text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'slider_button_text' => 'Read More!',
                'slider_button_url' => '#',
                'slider_photo' => 'slider-4.jpg',
                'created_at' => '2022-04-13 17:09:47',
                'updated_at' => '2024-01-12 13:03:47',
            ],
        ]);
    }
}