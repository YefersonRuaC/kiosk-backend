<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductCollection;
use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new ProductCollection(Product::where('available', 1)->get());
        // return new ProductoCollection(Producto::where('available', 1)->orderBy('id', 'DESC')->paginate(10));
    }

    public function getUnavailable()
    {
        return new ProductCollection(Product::where('available', 0)->get());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //Change product availability (1 = Available, 0 = Not available)
        ($product->available == 1) ? $product->available = 0 : $product->available = 1;
        
        $product->save();

        return response([
            'product' => $product
        ], Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
