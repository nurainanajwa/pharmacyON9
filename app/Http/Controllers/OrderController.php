<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;

class OrderController extends Controller
{
        public function viewOrder()
    {
        $cart = Cart::all();
        $order = Order::all();
        return view ("phar_history", compact('order', 'cart'));

    }


}
