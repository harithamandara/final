<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CheckoutController extends Controller
{
    public function index(Request $request)
    {
        $total = $request->input('total');
        // Handle the checkout logic, such as displaying the checkout page with the total amount
        return view('shop.checkout', compact('total'));
        }
}
