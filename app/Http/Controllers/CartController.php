<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    // public function store(Request $request){
    //     $user =  Auth::user();
    //     Cart::updateOrCreate(
    //     ['user_id' => $user()->id],
    //     ['items' => json_encode($request->cart)]
    //     );

    //     return response()->json([
    //         'message' => "Cart Saved Successfully",
    //     ]);

    // }


public function store(Request $request) {
    $user = Auth::user();

    if (!$user) {
        return response()->json(['error' => 'User not authenticated'], 401);
    }

    // try {
        Cart::updateOrCreate(
            ['user_id' => $user->id],
            ['items' => json_encode($request->cart)]
        );

        return response()->json([
            'message' => "Cart Saved Successfully",
        ]);
    // } 
// catch (\Exception $e) {
//         Log::error('Error saving cart: ' . $e->getMessage());
//         console.log(error);
//         return response()->json(['error' => 'Failed to save cart'], 500);
//     }
}


public function cart(){

    $cart = Cart::where('user_id', Auth::id())->first();
    $data =  compact('cart');
    return view('main.cart')->with($data);
    }



}
