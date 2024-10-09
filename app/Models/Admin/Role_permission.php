<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Role_permission extends Model
{
    protected $fillable = [
        'role_id',
        'role_page_id',
        'access_status',
        'operation'
    ];



    public function role_page()
    {
        return $this->belongsTo('App\Models\Admin\Role_page');
    }
    public function Client(){
        return $this->hasOne('App\Models\Admin\Role','id','role_id');
    }
    public function role_n()
{
    return $this->belongsTo('App\Models\Admin\Role', 'role_id');
}
}
