<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $cartItem = CartItem::updateOrCreate(
            [
                'user_id' => Auth::id(),
                'product_id' => $request->product_id,
            ],
            [
                'quantity' => \DB::raw("quantity + {$request->quantity}")
            ]
        );

        return redirect()->back()->with('success', 'Product added to cart successfully.');
    }

    public function viewCart()
    {
        $cartItems = CartItem::where('user_id', Auth::id())->get();
        return view('cart.index', compact('cartItems'));
    }
}
