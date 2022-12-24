<?php

namespace App\Http\Controllers;

use App\Models\Chatroom;
use App\Models\Order;
use Illuminate\Http\Request;

class ChatroomController extends Controller
{
    public function index(Request $request)
    {
        // $order = Order::findOrFail($orderId);

        // if (!$order->chatroom) {
        //     Chatroom::create([ 'order_id' => $order->id ]);
        // }

        return view('chatroom.index');
    }
}
