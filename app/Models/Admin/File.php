<?php

namespace App\Models\Admin;
   use Illuminate\Database\Eloquent\Model;
   class File extends Model
{
    protected $fillable = ['folder_id', 'filename', 'path'];

    public function folder()
    {
        return $this->belongsTo(Folder::class);
    }
}

