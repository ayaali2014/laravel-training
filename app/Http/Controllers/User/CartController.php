<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function __construct() {
        $this->middleware('auth:web');
    }

    public function getMyCart()
    {
        $carts = Cart::where('user_id', Auth::guard('web')->user()->id)->get();
        return view('cart.show', compact('carts'));
    }

    public function addToMyCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'amount' => 'required'
        ]);

        $existCartForProduct = Cart::where('user_id', Auth::guard('web')->user()->id)->where('product_id', $request->product_id)->first();
        if ($existCartForProduct) {
            $existCartForProduct->amount += $request->amount;
            $existCartForProduct->save();
        } else {
            Cart::create([
                'user_id' => Auth::guard('web')->user()->id,
                'product_id' => $request->product_id,
                'amount' => $request->amount,
            ]);
        }
        return redirect()->to(route('getMycart'));
    }
}
