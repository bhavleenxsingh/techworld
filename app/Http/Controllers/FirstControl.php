<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;


class FirstControl extends Controller
{
    public function home(){
        return view('main.home');
        }

    public function contact(){
        return view('main.contact');
        }

    public function products(){
        return view('main.products');
        }

    public function stock(){
        return view('main.stock');
        }
    
    public function stockin(Request $reqstockin){
        $reqstockin -> validate([
        'productid' => 'unique:stock|required|numeric',
        'name' => 'required|alpha_dash',
        'category' => 'required|alpha',
        'quantity' => 'required|numeric',
        'mrp' => 'required|numeric',
        'discount' => 'required|numeric',
        'price' => 'required|numeric',

        ]);

        $stock = new Stock;
        $stock->productid = $reqstockin['productid'];
        $stock->name = $reqstockin['name'];
        $stock->category = $reqstockin['category'];
        $stock->quantity = $reqstockin['quantity'];
        $stock->mrp = $reqstockin['mrp'];
        $stock->discount = $reqstockin['discount'];
        $stock->price = $reqstockin['price'];
        $stock->save();

        return redirect('/stock/view');
        }

public function viewstock(){
    $stockall = Stock::all();
    $stock = compact('stockall');
    return view('main.viewstock')-> with($stock);
        }





    
}
