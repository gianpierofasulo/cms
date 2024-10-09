<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Job_category extends Model
{
    protected $fillable = [
        'category_name',
        'category_slug',
        'seo_title',
        'seo_meta_description'
    ];
}
