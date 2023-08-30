<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    //
    function index()
    {
        $products = Product::all();
        return view('product.index', ['products' => $products]);
    }
    function show($id)
    {
        $product = Product::find($id);
        return view('product.show', compact('product'));
    }
    function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->route('product.index');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('product/edit', compact('product'));
    }

    public function update(Request $request)
    {
        $product = Product::findOrFail($request->id);
        if(filesize($request->file('product_picture'))==false){
            $file_name = $product['product'];
        }else{
            // $filename = time() . '.' . $request->product_picture->extension();
            // $request->file('product_picture')->move(public_path('product'), $filename);
            
            $imageName = time().'.'. $request->product_picture->extension();
            $request->product_picture->move(public_path('images'),$imageName);

            //Storage::disk('product')->put($filename, file_get_contents($request->file('product_picture')->getRealPath()));
            $product->update([
                "product_name" => $request->product_name,
                "product_picture"=>$imageName,
                "product_availabitiy" => $request->product_availabitiy,
                "product_price" => $request->product_price,
            ]);
        }
        return redirect()->to(route('product.show', [$request->id]));
    }
    function create()
    {
        return view('product.create');
    }
    function store(Request $request)
    {
        // $file_name = time() . '.' .$request->file('product_picture')->getClientOriginalExtension();
        // $request->file('product_picture')->move(public_path('product'), $file_name);

        $imageName = time().'.'. $request->product_picture->extension();
        $request->product_picture->move(public_path('images'),$imageName);

        Product::create([
            "product_name" => $request->product_name,
            "product_picture"=>$imageName,
            "product_availabitiy" => $request->product_availabitiy,
            "product_price" => $request->product_price,
            "category_id" => $request->category_id
        ]);
        return redirect()->route('product.index');
    }
}
