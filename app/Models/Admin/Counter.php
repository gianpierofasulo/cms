<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    protected $fillable = [
        'counter_title',
        'counter_number',
        'counter_favicon'

        ];

}
