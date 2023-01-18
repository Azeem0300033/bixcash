<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Bus;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bus = Bus::all();
        return view('admin.bus.index',compact('bus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bus.create',compact('bus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bus = new Bus();
        $bus->b_name = request('b_name');
        $bus->b_type = request('b_type');
        $bus->b_station = request('b_station');
        $bus->b_drop = request('b_drop');
        // Store Image Code
        $BusImage = time().'.'.request()->b_logo->getClientOriginalExtension();
        request()->b_logo->move(public_path('images/Bus'), $BusImage);
        $bus->b_logo = $BusImage;
        // Store Image Code
        $bus->b_price = request('b_price');
        $bus->b_date = request('b_date');
        $bus->b_time = request('b_time');
        $bus->save();
        
        return redirect('/admin/bus');
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
        $bus = Bus::find($id);
        return view('admin.bus.edit',compact('bus'));
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
        $bus = Bus::find($id);
        $bus->b_name = request('b_name');
        $bus->b_type = request('b_type');
        $bus->b_station = request('b_station');
        $bus->b_drop = request('b_drop');
        if($request->b_logo){
        // Store Image Code
        $BusImage = time().'.'.request()->b_logo->getClientOriginalExtension();
        request()->b_logo->move(public_path('images/Bus'), $BusImage);
        $bus->b_logo = $BusImage;
        // Store Image Code
        }
        $bus->b_price = request('b_price');
        $bus->b_date = request('b_date');
        $bus->b_time = request('b_time');
        $bus->save();
        
        return redirect('/admin/bus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bus = Bus::find($id);
        $bus->delete();
        
        return redirect('/admin/bus');
    }
}
