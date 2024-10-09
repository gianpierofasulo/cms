<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'document_name',
        'status',
        'document_url',
        'document_photo'
        
    ];

}
