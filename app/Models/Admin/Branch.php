<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $fillable = [
        'name',
        'status',
        'location',
        'level',
        'telephone',
        'manager',
        'detail',
        'latitude',
        'longtiude',
        'seo_title',
        'seo_meta_description',
        'photo'
        
    ];

}
