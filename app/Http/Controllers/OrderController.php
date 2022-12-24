<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Item;

class OrderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showMyOrders(Request $request)
    {
        return view('orders.myOrders')->with('orders', $request->user()->orders);
    }

    public function create(Request $request)
    {
        return view('orders.create', [
            'item' => Item::findOrFail($request->id)
        ]);
    }

    public function store(Request $reqest)
    {
        Order::create([
            'item_id' => $reqest->id,
            'user_id' => $reqest->user()->id
        ]);

        return redirect()->route('dashbord.orders');
    }
}
