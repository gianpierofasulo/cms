<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class GeneralSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('general_settings')->insert([
            'id' => 1,
            'logo' => 'logo.png',
            'favicon' => 'favicon.png',
            'login_bg' => 'login_bg.png',
            'top_bar_email' => 'demo@example.com',
            'top_bar_phone' => '+42222222222',
            'top_bar_social_status' => 'Show',
            'top_bar_login_status' => 'Show',
            'top_bar_registration_status' => 'Show',
            'top_bar_cart_status' => 'Show',
            'sidebar_total_recent_post' => 5,
            'theme_color' => '1B82D1',
            'sidebar_color' => '081A3F',
            'footer_column1_heading' => 'Important Links',
            'footer_column2_heading' => 'Useful Links',
            'footer_column3_heading' => 'Contact Information',
            'footer_column4_heading' => 'Social Media',
            'footer_address' => 'your Street address',
            'footer_email' => 'demo@example.com',
            'footer_phone' => '+422222222222',
            'footer_copyright' => '©Copyright 2024. your company All Rights Reserved.',
            'preloader_photo' => 'preloader.gif',
            'preloader_status' => 'Show',
            'sticky_header_status' => 'Show',
            'google_analytic_tracking_id' => '531240162',
            'google_analytic_status' => 'Show',
            'tawk_live_chat_code' => '<script type="text/javascript">
                var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
                (function(){
                    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                    s1.async=true;
                    s1.src=\'https://embed.tawk.to/5a7c31ded7591465c7077c48/default\';
                    s1.charset=\'UTF-8\';
                    s1.setAttribute(\'crossorigin\',\'*\');
                    s0.parentNode.insertBefore(s1,s0);
                })();
            </script>',
            'tawk_live_chat_status' => 'Show',
            'google_adsense_script_code' => '<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3527244353235156" crossorigin="anonymous"></script>',
            'google_adsense_script_status' => 'Show',
            'cookie_consent_status' => 'Show',
            'google_recaptcha_site_key' => '6LfiFKofAAAAAG5so9XN9uQVuws4zl31fjt94tuH',
            'google_recaptcha_status' => 'Hide',
            'banner_about' => 'banner_about.png',
            'banner_service' => 'banner_service.png',
            'banner_service_detail' => 'banner_service_detail.png',
            'banner_blog' => 'banner_blog.png',
            'banner_blog_detail' => 'banner_blog_detail.png',
            'banner_category' => 'banner_category.png',
            'banner_senior_detail' => 'banner_senior_detail.png',
            'banner_board_detail' => 'banner_board_detail.png',
            'banner_developer_detail' => 'banner_developer_detail.png',
            'banner_project' => 'banner_project.png',
            'banner_project_detail' => 'banner_project_detail.jpeg',
            'banner_team_member' => 'banner_team_member.png',
            'banner_team_member_detail' => 'banner_team_member_detail.jpeg',
            'banner_photo_gallery' => 'banner_photo_gallery.jpeg',
            'banner_video_gallery' => 'banner_video_gallery.png',
            'banner_faq' => 'banner_faq.jpeg',
            'banner_product' => 'banner_product.jpeg',
            'banner_product_detail' => 'banner_product_detail.jpeg',
            'banner_contact' => 'banner_contact.png',
            'banner_search' => 'banner_search.jpeg',
            'banner_cart' => 'banner_cart.jpeg',
            'banner_checkout' => 'banner_checkout.jpeg',
            'banner_login' => 'banner_login.jpeg',
            'banner_registration' => 'banner_registration.jpeg',
            'banner_forget_password' => 'banner_forget_password.png',
            'banner_customer_panel' => 'banner_customer_panel.jpeg',
            'banner_career' => 'banner_career.png',
            'banner_branch' => 'banner_branch.png',
            'banner_senior' => 'banner_senior.png',
            'banner_board' => 'banner_board.png',
            'banner_job' => 'banner_job.png',
            'banner_job_application' => 'banner_job_application.png',
            'banner_term' => 'banner_term.png',
            'banner_privacy' => 'banner_privacy.png',
            'banner_document' => 'banner_document.png',
            'banner_ceo' => 'banner_ceo.png',
            'authorized_share' => 1200000000,
            'per_value' => 1000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
