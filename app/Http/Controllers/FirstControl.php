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
    $stockall = Stock::all();
    $data = compact('stockall');
    return view('main.products')->with($data);
    }

    public function stock(){
        $url = url('/stock');
        $title = "Add New Product";
        $heading = "Add New Product";
        $data = compact('url', 'title', 'heading');
        return view('main.stock')->with($data);
        }
    
    public function stockin(Request $reqstockin){
        $reqstockin -> validate([
        'productid' => 'unique:stock|required|numeric',
        'name' => 'required|alpha_dash',
        'image' => 'required',
        'category' => 'required|alpha',
        'quantity' => 'required|numeric',
        'mrp' => 'required|numeric',
        'discount' => 'numeric',
        'price' => 'required|numeric',

        ]);

        $stock = new Stock;
        $stock->productid = $reqstockin['productid'];
        $stock->name = $reqstockin['name'];
        if ($reqstockin->hasfile('image'))
        {
            $file = $reqstockin->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file ->move('public/uploads/product/', $filename);
            $stock->image = $filename;
        }
        else {
            $stock->image = "No Picture Available";
        }
        $stock->category = $reqstockin['category'];
        $stock->tagline = $reqstockin['tagline'];
        $stock->description = $reqstockin['description'];
        $stock->quantity = $reqstockin['quantity'];
        $stock->mrp = $reqstockin['mrp'];
        $stock->price = $reqstockin['price'];
        $stock->discount = (($stock->mrp - $stock->price) / $stock->mrp) * 100;
        $stock->save();

        // $discount = (((($stock->mrp)-($stock->price))/($stock->mrp)) * 100);

        // $data = compact('discount');
        return redirect('/stock/view');
        }

public function viewstock(){
    $stockall = Stock::all();
    $stock = compact('stockall');
    return view('main.viewstock')-> with($stock);
        }

public function editstock($productid){
    $stockedit = Stock::find($productid);
    if (is_null($stockedit)){
    return redirect('main.viewstock');
        }
    else{
    $url = url('/stock/update/')."/".$productid;
    $title = "Edit Product Details";
    $heading = "Edit Product Details";
    $data = compact('stockedit', 'url', 'title', 'heading');
    return view('main.stock')->with($data);
        } 
    }

public function updatestock($id, Request $reqstockin){
        

        $stock = Stock::find($id);
        $stock->name = $reqstockin['name'];
        $stock->image = $reqstockin['image'];
        $stock->category = $reqstockin['category'];
        $stock->category = $reqstockin['tagline'];
        $stock->category = $reqstockin['description'];
        $stock->quantity = $reqstockin['quantity'];
        $stock->mrp = $reqstockin['mrp'];
        $stock->price = $reqstockin['price'];
        $stock->discount = (($stock->mrp - $stock->price) / $stock->mrp) * 100;
        $stock->save();

    return redirect('/stock/view');
    }

public function deletestock($id, Request $reqstockin){
        $stock = Stock::find($id);
        if(!is_null($stock)){
            $stock->delete();
        }
        return redirect('/stock/view');
        }
public function faq(){
    return view('main.faq');
}

public function about(){
    return view('main.about');
}

public function cart(){
    return view('main.cart');
}


}
