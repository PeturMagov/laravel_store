<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('orders.index')->with('orders', Order::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders.create');
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
            'name' => 'required',
            'phone' => 'required',
            'shipping_address' => 'required'
        ]);

        $order = new Order([
            'name' => $request->name,
            'phone' => $request->phone,
            'shipping_address' => $request->shipping_address
        ]);

        $order->save();

        return redirect('orders');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::find($id);
        return view('orders.view')->with('order', $order);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::find($id);
        return view('orders.edit')->with('order', $order);
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
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'shipping_address' => 'required'
        ]);

        $order = Order::find($id);

        $order->name = $request->name;
        $order->phone = $request->phone;
        $order->shipping_address = $request->shipping_address;
        $order->update();

        return redirect('orders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::find($id);
        $order->delete();

        return redirect('orders');
    }
    
    public function change_status(Request $request, $id)
    {
        $order = Order::find($id);

        $status = $request->status;

        date_default_timezone_set("Europe/Sofia");
        $date = date("H:i d-m-Y");

        if($status == 'shipped') {
            $order->status = 'shipped';
            $order->shipped_at = $date;
         } else if($status == 'completed') {
            $order->status = 'completed';
            $order->completed_at = $date;
         } else if($status == 'canceled') {
            $order->status = 'canceled';
            $order->canceled_at = $date;
         }
        $order->update();
        return redirect('orders'); 
    }
}
