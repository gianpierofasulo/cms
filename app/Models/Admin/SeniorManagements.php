<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class SeniorManagements extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'designation',
        'ceo_message',
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

     public function Management_category()
    {
        return $this->belongsTo('App\Models\Admin\Management_category');
    }

}
