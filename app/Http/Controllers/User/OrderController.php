<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::where('user_id', Auth::guard('web')->user()->id)->get();
        return view('order.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carts = Cart::where('user_id', Auth::guard('web')->user()->id)->with('product')->get();
        $totalPrice = 0;
        foreach ($carts as $cart) {
            $totalPrice += $cart->amount * $cart->product->price;
        }

        $order = Order::create([
            'user_id' => Auth::guard('web')->user()->id,
            'price' => $totalPrice,
        ]);

        foreach ($carts as $cart) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $cart->product_id,
                'amount' => $cart->amount,
            ]);
        }

        Cart::where('user_id', Auth::guard('web')->user()->id)->delete();

        return redirect()->to(route('order.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('order.show', compact('order'));
    }
}
