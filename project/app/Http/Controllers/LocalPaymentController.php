<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Cart;



class LocalPaymentController extends Controller
{
     public function  jazzcash(Request $request)
    {
        $response = $request->input();
        if(Session::has('tempcart')){
        $oldCart = Session::get('tempcart');
        $tempcart = new Cart($oldCart);
        $order = Session::get('temporder');
        }
        else{
            $tempcart = '';
            return redirect()->back();
        }

        
        if($request->pp_ResponseCode == "000")
        {
           return view('jazz_done',compact('tempcart','order','response')); 
        }
        
        else{
           return view('jazz_error',compact('tempcart','order','response'));
        }
    }

}
