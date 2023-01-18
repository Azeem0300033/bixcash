<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPaymentMaster extends Model
{   
    protected $table = "user_payment_master";
    protected $fillable = ['user_id','user_name','pay_id','level','amount','pay_date','status'];
    public $timestamps = false;
    
    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}