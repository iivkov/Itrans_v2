<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehicles.order');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'departure_date' => 'required',
            'departure_location' => 'required',
            'arrival_date' => 'required',
            'arrival_location' => 'required',
            'order_info' => 'required',
        ]);
    
        Order::create($request->all());
     
        return redirect()->route('vehicles.index')->with('success', 'Vehicle ordered successfully!');
    }
    
}
