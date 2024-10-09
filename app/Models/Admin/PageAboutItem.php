<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class PageAboutItem extends Model
{
    protected $fillable = [
        'name',
        'content',
        'status',
        'mession',
        'vision',
        'objective',
        'core_value',
        'seo_title',
        'seo_meta_description',
        'about_us_photo',
        'mession_photo',
        'vision_photo',
    ];

}
