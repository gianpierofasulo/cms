<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class PageHomeItem extends Model
{
    protected $fillable = [
        'seo_title',
        'seo_meta_description',
        'header_type',
        'header_type_image_heading',
        'header_type_image_content',
        'header_type_image_btn_text',
        'header_type_image_btn_url',
        'header_type_image_photo',
        'header_type_video_heading',
        'header_type_video_content',
        'header_type_video_btn_text',
        'header_type_video_btn_url',
        'header_type_video_yt_url',
        'why_choose_title',
        'why_choose_subtitle',
        'why_choose_status',
        'why_choose_bg',

        'counter_title',
        'counter_subtitle',
        'counter_status',
        'counter_bg',

        'special_title',
        'special_subtitle',
        'special_content',
        'special_btn_text',
        'special_btn_url',
        'special_yt_video',
        'special_bg',
        'special_video_bg',
        'special_status',
        'service_title',
        'service_subtitle',
        'service_status',
        'testimonial_title',
        'testimonial_subtitle',
        'testimonial_status',
        'testimonial_bg',
        'project_title',
        'project_subtitle',
        'project_status',
        'partner_title',
        'partner_subtitle',
        'partner_status',
        'senior_title',
        'senior_subtitle',
        'senior_status',
        'board_title',
        'board_subtitle',
        'board_status',
        'team_member_title',
        'team_member_subtitle',
        'team_member_status',
        'appointment_title',
        'appointment_text',
        'appointment_btn_text',
        'appointment_btn_url',
        'appointment_bg',
        'appointment_status',
        'latest_blog_title',
        'latest_blog_subtitle',
        'latest_blog_status',
        'newsletter_title',
        'newsletter_text',
        'newsletter_bg',
        'newsletter_status',
        'document_title',
        'document_subtitle',
        'document_status',
        'about_us_title',
        'about_us_subtitle',
        'about_us_status'
    ];

}
