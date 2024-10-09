<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class BoardDirector extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'designation',
        'board_message',
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
