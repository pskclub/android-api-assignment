<?php

namespace App\Http\Controllers;

use App\Product;

class ProductController extends Controller
{
    public function lists()
    {
        $products = Product::orderBy('id','DESC')->get();

        return response()->json([
                'success' => true,
                'data' => compact('products')]
        );
    }

    public function byId($id)
    {
        $product = Product::find($id);

        if (!$product)
            return response()->json([
                    'success' => false,
                    'data' => null]
                , 404);

        return response()->json([
                'success' => true,
                'data' => compact('product')]
        );
    }
}
