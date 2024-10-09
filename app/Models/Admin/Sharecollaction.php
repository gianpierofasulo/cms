<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Sharecollaction extends Model
{
    protected $fillable = [
        'company_id','shareholder_id','subscribed_share', 'share_subscription_id' ,'price_per_share' => 1000 ,'subscribed_date','paidup_share','payment_date','payment_amount', 'partial_payable',
        'term','payment_frequancy','maturity_date','total_share','serial_no','transaction_id','refrence',
        'description','total_paidup_share','total_unpaid_share',
        'created_by' 
    ];

public function Company(){
        return $this->hasOne('App\Models\Admin\Company','id','company_id');
    }
    public function Client(){
        return $this->hasOne('App\Models\Admin\Client','id','shareholder_id');
    }
    public function Sharesubscribe(){
        return $this->hasOne('App\Models\Admin\Sharesubscribe','id','share_subscription_id');
    }
}

