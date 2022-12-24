<?php

namespace App\Http\Controllers;

use App\Models\Chatroom;
use App\Models\Message;
use App\Models\Order;
use Illuminate\Http\Request;

class ChatroomController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $order = Order::findOrFail($request->id);

        if (!$order->chatroom) {
            Chatroom::create([ 'order_id' => $order->id ]);
        }

        return view('chatroom.index')->with('order', $order)->with('messages', $order->chatroom->messages);
    }

    public function storeMessage(Request $request)
    {
        Message::create([
            'chatroom_id' => $request->chatroom_id,
            'user_id'      => auth()->id(),
            'message'      => $request->message
        ]);

        return back();
    }
}
