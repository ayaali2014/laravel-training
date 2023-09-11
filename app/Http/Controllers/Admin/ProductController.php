<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct() {
        $this->middleware('auth:admin');
    }

    //
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('product.show', compact('product'));
    }

    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return redirect()->route('product.index');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('product/edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'max:200',
        ]);

        $product = Product::findOrFail($id);

        if ($request->file('avatar')) {
            $imageName = time() . '.' . $request->avatar->extension();
            $request->avatar->move(public_path('images'), $imageName);


            $product->update([
                "name" => $request->name,
                "avatar" => $imageName,
                "availabitiy" => $request->availabitiy,
                "price" => $request->price,
            ]);
        }
        return redirect()->route('category.show', $request->input('category_id'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|max:255|unique:products',
            'price' => 'required',
            'availability' => 'required',
            'avatar' => 'required',
            'category_id' => 'required'
        ]);

        if ($request->file('avatar')) {

            $imageName = time() . '.' . $request->avatar->extension();
            $request->avatar->move(public_path('images'), $imageName);

            Product::create([
                "name" => $request->name,
                "avatar" => $imageName,
                "availability" => $request->availability,
                "price" => $request->price,
                "category_id" => $request->category_id
            ]);
        }

        return redirect()->route('category.show', $request->category_id);
    }

    public function searchProduct4admin(Request $request)
    {
        if ($request->search) {
            $products = Product::where('name', 'like', '%' . $request->search . '%')->get();
            return view('search.adminproducts', compact('products'));
        } else {
            return redirect()->back()->with('message', 'Empty Search');
        }
    }
}
