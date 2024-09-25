<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderCollection;
use App\Models\Order;
use App\Models\OrderProduct;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Using user and products model relations
        return new OrderCollection(Order::with('user', 'products')->where('state', 0)->get());
        //state = 0 order that is being prepared
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'total' => 'required|numeric|min:0.01',
            'products' => 'required|array|min:1',
            'products.*.id' => 'required|integer|exists:products,id',
            'products.*.quantity' => 'required|integer|min:1',
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $order = new Order;
        // $order->user_id = Auth::user()->id;
        $order->total = $request->total;
        $order->save();

        $id = $order->id;
        $products = $request->products;
        $order_product = [];

        foreach($products as $product) {
            //'order_product' table structure
            $order_product[] = [
                'order_id' => $id,
                'product_id' => $product['id'],
                'quantity' => $product['quantity'],
                //Insert doesn't create this laravel fields automatically
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ];
        }

        //insert allows to save an array in our db
        OrderProduct::insert($order_product);

        return response([
            'message' => 'Order created successfully, it will be ready in a few minutes'
        ], Response::HTTP_CREATED);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $order->state = 1;//state = 1, order is ready

        $order->save();

        return response([
            'order' => $order
        ], Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
