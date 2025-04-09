<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function create(Request $request)
    {
        $cart = session()->get('cart', []);
        if (empty($cart)) {
            return response()->json(['message' => 'Cart is empty'], 400);
        }

        $total_price = array_sum(array_column($cart, 'price'));

        $order = Order::create([
            'user_id' => Auth::id(),
            'total_price' => $total_price,
            'status' => 'Pending'
        ]);

        session()->forget('cart');
        return response()->json(['message' => 'Order placed successfully', 'order' => $order], 201);
    }
}
