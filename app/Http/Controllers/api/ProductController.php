<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function index(){
        $products = Product::all();
        return response()->json(['data' => $products]);
    }

    function show($id){
        $product = Product::findOrFail($id);
        if(!empty($product)){
            return response()->json(['data' => $product]);
        }else{
            return response()->json(['message'=>'product not found'],['status'=> 503]);
        }
    }

    function store(Request $request){
        $request->validate([
            'name'=> 'required|max:100|min:3',
            'price'=> 'required',
            'availability'=> 'required',
            'category_id'=> 'required',
        ]);
        try{
            $product = Product::create($request->all()) ;
            return response()->json(['data' => $product , 'message'=>'product is added']);
            
        }catch(\Throwable $th){
            return response()->json(['message'=>'server is not available']);
        }
    }

    function update(Request $request, $id){
        $product = Product::find($id);
        $request->validate([
            'name'=> 'max:100|min:3',
        ]);
        if($product){
            $product->update($request->all());
            return response()->json(['data' => $product , 'message'=>'product is updated']);
        }
        return response()->json(['message'=>'product is not found']);
    }

    function destroy($id){
        $product = Product::find($id);
        if($product){
            $product->delete();
            return response()->json(['data' => $product, 'message'=>'product is deleted']);
        }
        return response()->json(['message'=>'product not found']);
    }
}
