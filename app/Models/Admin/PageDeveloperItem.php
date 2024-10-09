<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class PageDeveloperItem extends Model
{
    protected $fillable = [
        'name',
        'content',
        'status',
        'seo_title',
        'seo_meta_description'
    ];

}
