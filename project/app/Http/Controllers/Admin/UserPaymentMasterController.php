<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserPaymentMaster;

class UserPaymentMasterController extends Controller
{
    public function __construct()
    {
       // $this->middleware('auth:admin');
    }


   //*** GET Request
    public function test()
    {
        $datas = UserPaymentMaster::orderBy('id')->get();
        echo "<pre>";
        //print_r($datas);die;
        if(!empty($datas)){
            foreach($datas as $key => $val){
               // $data = array('level'=>$val->level);
                print_r($val->user->email);
            }
        }
    }

    
}