<?php
namespace App\Models\Admin;
use Illuminate\Database\Eloquent\Model;
class Ai_chat extends Model
{
    protected $fillable = [
        'user_id',
        'user_message',
        'ai_message'        
    ];

}
