<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
public function store(Request $request) {
    $user = Auth::user();

    if (!$user) {
        return response()->json(['error' => 'User not authenticated'], 401);
    }

        Cart::updateOrCreate(
            ['user_id' => $user->id],
            ['items' => json_encode($request->cart)]
        );

        return response()->json([
            'message' => "Cart Saved Successfully",
        ]);
}


public function cart(){

    $cart = Cart::where('user_id', Auth::id())->first();
    $data =  compact('cart');
    return view('main.cart')->with($data);
    }

public function checkout(){
    $cart = Cart::where('user_id', Auth::id())->first();
    $data = compact('cart');
    return view('main.checkout')->with($data);
    }

public function ordersave(Request $request){
        

    }

}
