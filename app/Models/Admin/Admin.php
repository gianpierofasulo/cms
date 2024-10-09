<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Admin as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Notifications\TwoFactorCodeNotification;


use Carbon\Carbon;

class Admin extends Model
{
	  use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'token',
        'photo',
        'role_id',
        'two_factor',
        'two_factor_code',
        'two_factor_expires_at',
    ];

     protected $dates = [
        'created_at',
        'updated_at',
        'two_factor_expires_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_code',
    ];

    // =------------- new added --------------=



    public function getTwoFactorExpiresAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setTwoFactorExpiresAtAttribute($value)
    {
        $this->attributes['two_factor_expires_at'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }
    public function generateTwoFactorCode($user)
    {
        $this->timestamps            = false;
        $this->two_factor_code       = rand(100000, 999999);
        $this->two_factor_expires_at = now()->addMinutes(15)->format(config('panel.date_format') . ' ' . config('panel.time_format'));
        $this->save();

        $otp = $this->two_factor_code;

        $user->notify(new TwoFactorCodeNotification());

    }


    public function generateTwoFactorCode1()
    {

        $userId = session('id');
        $user = Admin::find($userId);
        //$user = session('id'); // Retrieve authenticated user
        $this->timestamps            = false;
        $this->two_factor_code       = rand(100000, 999999);
        $this->two_factor_expires_at = now()->addMinutes(15)->format(config('panel.date_format') . ' ' . config('panel.time_format'));
        $this->save();

        $otp = $this->two_factor_code;

    $user->notify(new TwoFactorCodeNotification());

        // if(setting('active_otp_gateway') =='SMS'){
        //     $this->sendSms($otp, $phone);
        // }
    }
    public function resetTwoFactorCode()
    {
        $this->timestamps            = false;
        $this->two_factor_code       = null;
        $this->two_factor_expires_at = null;
        $this->save();
    }
    // -------- end new added -----------



    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];

    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

}



