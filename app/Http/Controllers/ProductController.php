<?php

namespace App\Http\Controllers;

use PDO;
use Stripe\Stripe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function __construct()
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
    }

    public function index(){
        $user = Auth::user();
        $products = \Stripe\Product::all(
            ['type' => 'good']
        );
        $products = array_filter($products->data, function($item) use ($user){
            return $item->metadata->stripe_account == $user->stripe_account_id;
        });
        $prices = \Stripe\Price::all();

        return view('Products.ProductList', compact('products', 'prices'));
    }
    public function store(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
            'stock' => 'required|integer',
            'description' => 'required',
        ]);

        try {
            $product = \Stripe\Product::create(
                [
                    'name' => $request->name,
                    'description' => $request->desc,
                    'active' => true,
                    'type' => 'good',
                    'metadata' => [
                        'stock' => $request->stock,
                        'status' => 'Pending',
                        'category' => $request->category,
                        'stripe_account' => $user->stripe_account_id,
                    ],
                ]
            );

            \Stripe\Price::create(
                [
                    'currency' => 'php',
                    'unit_amount' => $request->price * 100,
                    'product' => $product->id,
                    'metadata' => [
                        'stripe_account' => $user->stripe_account_id
                    ],
                ]
            );

            return redirect()->back()->with('success', 'Product added successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong: ' . $e->getMessage());
        }
    }
}
