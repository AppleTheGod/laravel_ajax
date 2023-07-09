<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function product()
    {
        return view('product');
    }

    //add_product
    public function addProduct(Request $request)
    {
        $request->validate(
            [
                'name_product' => 'required|unique:products',
                'price_product' => 'required'
            ],
            [
                'name_product.required'=>'Cant leave like this',
                'name_product.unique'=>'Already have',
                'price_product.required'=>'Cant leave like this',
            ]
        );
        $product = new Product();
        $product->name = $request->name_product;
        $product->price = $request->price_product;
        $product->save();
        return response()->json([
            'status'=>'success',
        ]);
    }
    
}
