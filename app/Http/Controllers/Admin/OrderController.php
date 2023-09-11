<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;

class OrderController extends Controller
{
    public function __construct() {
        $this->middleware('auth:admin');
    }

    public function index() {
        $orders = Order::all();
        return view('order.index', compact('orders'));
    }
}
