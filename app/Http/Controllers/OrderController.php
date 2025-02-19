<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function __construct()
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
    }

    public function index(){
        $user = Auth::user();

        $orders = \Stripe\Checkout\Session::all();
        $orders = array_filter($orders->data, function($item) use ($user){
            return $item->metadata->vendor_id == $user->stripe_account_id;
        });

        return view('Orders.OrderList', compact('orders'));
    }

    public function order_detail($order_id){
        $order = \Stripe\Checkout\Session::retrieve($order_id);
        $order_items = $order->allLineItems($order->id);
        $customer = \Stripe\Customer::retrieve($order->customer);

        return view('Orders.OrderDetails', compact('order_items', 'customer', 'order'));
    }
}
