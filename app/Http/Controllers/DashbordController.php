<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class DashbordController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {
        return view('dashbord.show', [
            'item_count' => Item::count(),
            'order_count' => Order::count(),
            'user_count' => User::count()
        ]);
    }

    public function showUsers()
    {
        return view('users.show', [
            'users' => User::all()
        ]);
    }

    public function showOrders()
    {
        return view('orders.show', [
            'orders' => Order::all()
        ]);
    }

}
