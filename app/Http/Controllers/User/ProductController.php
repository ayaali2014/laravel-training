<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct() {
        $this->middleware('auth:web');
    }

    public function getproducts($id)
    {
        $category = Category::findOrFail($id);
        return view('user.product', compact('category'));
    }

    public function searchProduct(Request $request)
    {
        if ($request->search) {
            $products = Product::where('name', 'like', '%' . $request->search . '%')->get();
            return view('search.products', compact('products'));
        } else {
            return redirect()->back()->with('message', 'Empty Search');
        }
    }
}
