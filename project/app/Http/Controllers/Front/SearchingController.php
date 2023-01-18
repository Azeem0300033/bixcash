<?php

namespace App\Http\Controllers\Front;


use Illuminate\Http\Request;
use App\Classes\GeniusMailer;
use App\Models\Generalsetting;
use App\Models\Bus;
use App\Models\Bus_Checkout;
use App\Models\Seat_Checkout;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SearchingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.bus_search');
    }
    
    
    public function CheckoutDataCall(Request $request)
    {
        
        $data = $request->seats;
        $bus_id = $request->bus_id;
        $bus = Bus::where('id',$bus_id)->first();
        
        $seatscount =  count($data);
        
        $pricecounts = $bus->b_price * $seatscount;
        
        
        return view('front.bus-checkout',compact('data','bus_id','bus','seatscount','pricecounts'));
    }
    
    
    public function listing()
    {
        $bus = Bus::all();
        return view('front.listing',compact('bus'));
    }
    
    public function busshow($id)
    {
        $bus = Bus::where('id',$id)->first();
        return view('front.Seatshow',compact('bus'));
    }
    
    public function buscheckout($id)
    {
        $bus = Bus::where('id',$id)->first();
        return view('front.bus-checkout',compact('bus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data[] = $request->seats;
        $bus_id = $request->bus_id;
        $bus = Bus::where('id',$bus_id)->first();
        return view('front.bus-checkout',compact('data','bus_id','bus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bus_checkout = new Bus_Checkout();
        $bus_checkout->user_id = '1';
        $bus_checkout->bus_id = request('bus_id');
        $bus_checkout->name = request('name');
        $bus_checkout->birth = request('birth');
        $bus_checkout->gender = request('gender');
        $bus_checkout->cnic = request('cnic');
        $bus_checkout->phone = request('phone');
        $bus_checkout->email = request('email');
        $bus_checkout->seats_no = request('seats_no');
        $bus_checkout->total = request('total');
        $bus_checkout->save();
        
        foreach ($request->seats_num as $name) 
        {
            $seat_checkout = new Seat_Checkout();
            $seat_checkout->seats = $name;
            $seat_checkout->checkout_id = $bus_checkout->id;
            $seat_checkout->save();    
        }
        
        return redirect('/Slip');
    }
    
    public function slip()
    {
        $slip = Bus_Checkout::all();
        
        return view('front.slip',compact('slip'));
    }
    
    public function some_method(Request $request)
    {
        
        $where = $request->where;
        $to = $request->to;
        $date = $request->date;
        $time = $request->time;
        
        
        $s_where =  Bus::query();
        
        // $s_where = Bus::Where('b_station',$where)->Where('b_drop',$to)->Where('b_date',$date)->Where('b_time',$time)->get();
        
         if(!empty($where))
        {
          $s_where = $s_where->where('b_station',$where);
        }
        
        if(!empty($where))
        {
          $s_where = $s_where->where('b_drop',$to);
        }
        
        if(!empty($where))
        {
          $s_where = $s_where->where('b_date',$date);
        }
        
        
        if(!empty($where))
        {
          $s_where = $s_where->where('b_time',$time);
        }
        
         $s_where =$s_where->get();
        
        return view('front.listing',compact('s_where'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
