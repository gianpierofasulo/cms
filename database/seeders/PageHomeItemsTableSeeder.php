<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PageHomeItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_home_items')->insert([
            [
                'id' => 1,
                'seo_title' => 'CMSMULTI',
                'seo_meta_description' => 'your meta description',
                'why_choose_title' => 'Why Choose Us',
                'why_choose_subtitle' => 'You should choose our product for the following reasons',
                'why_choose_status' => 'Show',
                'special_title' => 'Welcome to our website',
                'special_subtitle' => 'Lorem Ipsum',
                'special_content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, \r\n\r\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'special_btn_text' => 'Read More',
                'special_btn_url' => '#',
                'special_yt_video' => 'UreGlSvnb1A',
                'special_bg' => 'special_bg.png',
                'special_video_bg' => 'special_video_bg.png',
                'special_status' => 'Show',
                'service_title' => 'Our Services',
                'service_subtitle' => 'Our team always provides quality services to our valuable clients',
                'service_status' => 'Show',
                'testimonial_title' => 'Testimonial',
                'testimonial_subtitle' => 'What our clients tell about us',
                'testimonial_status' => 'Show',
                'testimonial_bg' => 'testimonial_bg.png',
                'project_title' => 'Our Projects',
                'project_subtitle' => 'See all our completed successful projects here',
                'project_status' => 'Show',
                'team_member_title' => 'Team Members',
                'team_member_subtitle' => 'See all our expert team members who are ready to help you always',
                'team_member_status' => 'Show',
                'appointment_title' => 'Lorem Ipsum has been the industry\'s standard',
                'appointment_text' => 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'appointment_btn_text' => 'Make An Appointment',
                'appointment_btn_url' => '#',
                'appointment_bg' => 'appointment_bg.png',
                'appointment_status' => 'Show',
                'latest_blog_title' => 'Latest Blog',
                'latest_blog_subtitle' => 'See all the latest blog about our activity from here',
                'latest_blog_status' => 'Show',
                'newsletter_title' => 'Newsletter',
                'newsletter_text' => 'TO GET FREE NOTIFICATIONS SUBSCRIBE TO OUR NEWSLETTER',
                'newsletter_bg' => 'newsletter_bg.jpg',
                'newsletter_status' => 'Show',
                'partner_title' => 'Our Partners',
                'partner_subtitle' => 'See all our Partners',
                'partner_status' => 'Show',
                'senior_title' => 'Senior Management',
                'senior_subtitle' => 'See all our Senior Management',
                'senior_status' => 'Show',
                'board_title' => 'Board of Directors',
                'board_subtitle' => 'Lorem Ipsum has been the industry\'s standard',
                'board_status' => 'Show',
                'document_title' => 'Public Documents & Files',
                'document_subtitle' => 'See All Document',
                'document_status' => 'Show',
                'about_us_title' => 'About Us',
                'about_us_subtitle' => 'About our Business',
                'about_us_status' => 'Show',
                'why_choose_bg' => '',
                'counter_title' => 'counter',
                'counter_subtitle' => 'counter section',
                'counter_status' => 'Show',
                'counter_bg' => 'counter_bg.png',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
