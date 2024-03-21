<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Tour;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        return view('order/order', ['orders' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {     
        $tours = Tour::where('status', 1)->get();
        return view('order/create',['tours' => $tours]); //////////////
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request )
    {
       
        $data = request()->validate([
            'pip' => 'required|string',
            'telephone' => 'required|string',
            'email' => 'required|email',
            'tour_id' => 'required|integer',
            'count_day' => 'required|integer',
            'price' => 'required|numeric',
        ]);
        Order::create($data);
        $orders = Order::all();
        return view('order/order', ['orders' => $orders]);
        //return redirect()->route('order.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = Order::find($id);
        return view('order/show', ['order' => $order]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $order = Order::find($id);
        $pricePerDay = Tour::find($order->tour_id)->price;
        return view('order/edit', ['order' => $order,'pricePerDay' => $pricePerDay]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = request()->validate([
            'pip' => 'required|string',
            'telephone' => 'required|string',
            'email' => 'required|email',
            'tour_id' => 'required|integer',
            'count_day' => 'required|integer',
            'price' => 'required|integer',
        ]);
        Order::where('id', $id)->update($data);
        $orders = Order::all();
        return view('order/order', ['orders' => $orders]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = Order::find($id);
        $order->delete();
        $orders = Order::all();
        return view('order/order', ['orders' => $orders]);
    }
}
