<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'detail',
        'facebook',
        'twitter',
        'linkedin',
        'instagram',
        'email',
        'phone',
        'website',
        'address',
        'video_youtube',
        'photo',
        'seo_title',
        'seo_meta_description'
    ];

}
