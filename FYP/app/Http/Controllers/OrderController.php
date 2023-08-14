<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\order_items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    

    public function getOrders()
    {
        $user=auth()->user();



        $orders=Order::where('client_id','=',$user->id)->get();

        // return response()->json($bids);

        return response()->json($orders);
    }


    public function getOrderDetails($orderId)
{
    
        Log::info("reached here1");
        
        $orderItems =order_items::where('order','=',$orderId)->get();

        Log::info("reached here2");

        return response()->json([
            'order_id' => $orderId,
            'items' => $orderItems
        ], 200);
    
}


}
