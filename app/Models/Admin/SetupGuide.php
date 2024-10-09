<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SetupGuide extends Model
{
    use HasFactory;

     protected $fillable = [
        'task_name',
        'title',
        'description',
        'action_route',
        'action_label',
        'status'
    ];
}
