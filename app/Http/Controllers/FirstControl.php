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
public function faq(){
    return view('main.faq');
    }

public function about(){
    return view('main.about');
    }

public function cart(){
    return view('main.cart');
    }


public function categorysort($category){
    //sort by category
    //     $eachcat = Stock::find($category);
    //     if (is_null($category)){
    //     return redirect('main.products');
    //         }
    //     else{
    //     $cat = compact('eachcat');
    //     return view('main.categorysort')-> with($eachcat);
    //         }
    // }

    // Fetch products based on category
    $products = Stock::where('category', $category)->get();
    
    return view('main.categorysort', ['products' => $products, 'category' => $category]);
    }


public function stock(){
//  if (Auth::user()->email != 'admin@admin.com') {
//         return redirect('/')->with('error', 'Access denied!');
//     }
    $url = url('/stock');
    $title = "Add New Product";
    $heading = "Add New Product";
    $data = compact('url', 'title', 'heading');
    return view('main.stock')->with($data);
    }

public function stockin(Request $reqstockin)
{
    \Log::info(request()->all());
    $reqstockin->validate([
        'name' => 'required|regex:/^[a-zA-Z0-9\s\[\]\(\)\.]+$/',
        'image' => 'required',
        'category' => 'required',
        'quantity' => 'required|numeric',
        'mrp' => 'required|numeric',
        'price' => 'required|numeric',
        'discount' => 'nullable|numeric',
        'tagline' => 'nullable|string',
        'description' => 'nullable|string'
    ]);

    $stock = new Stock();
    $stock->name = $reqstockin->input('name');

    if ($reqstockin->hasFile('image')) {
        $imageName = time() . '_' . $reqstockin->file('image')->getClientOriginalName();
        $reqstockin->file('image')->storeAs('public/products', $imageName);
        $stock->image = $imageName;
    }
    else {
            $stock->image = "No Picture Available";
        }

    $stock->category = $reqstockin->input('category');
    $stock->tagline = $reqstockin->input('tagline');
    $stock->description = $reqstockin->input('description');
    $stock->quantity = $reqstockin->input('quantity');
    $stock->mrp = $reqstockin->input('mrp');
    $stock->price = $reqstockin->input('price');
    $stock->discount = $reqstockin->input('discount') ?? (($stock->mrp - $stock->price) / $stock->mrp) * 100;
    $stock->save();
    return redirect('/stock/view')->with('success', 'Stock added successfully!');
}


// public function stockin(Request $reqstockin){
//     $reqstockin -> validate([
//     'name' => 'required|alpha_dash',
//     'image' => 'required',
//     'category' => 'required|alpha',
//     'quantity' => 'required|numeric',
//     'mrp' => 'required|numeric',
//     'discount' => 'numeric',
//     'price' => 'required|numeric',

//     ]);

//     $stock = new Stock;
//     $stock->name = $reqstockin['name'];
//     // if ($reqstockin->hasfile('image'))
//     // {
//     //     $file = $reqstockin->file('image');
//     //     $extension = $file->getClientOriginalExtension();
//     //     $filename = time().'.'.$extension;
//     //     $file->move(storage_path('app/public/uploads/product'), $filename);

//         // $imageName = time() . '_' . $image->getClientOriginalName();
//         // $path = $image->storeAs('public/products', $imageName);

//         // $path = $image->storeAs('public/products', $imageName);

//   if ($reqstockin->hasFile('image')) {
//         $image = $reqstockin->file('image');
//         $imageName = time() . '_' . $image->getClientOriginalName();

//         // Move image to new folder inside storage
//         $path = $image->storeAs('public/products', $imageName);
//     }

//         // $file ->move('public\uploads\product', $filename);
//         // $stock->image = $filename;
//     $stock->image = $imageName;

//     $stock->category = $reqstockin['category'];
//     $stock->tagline = $reqstockin['tagline'];
//     $stock->description = $reqstockin['description'];
//     $stock->quantity = $reqstockin['quantity'];
//     $stock->mrp = $reqstockin['mrp'];
//     $stock->price = $reqstockin['price'];
//     $stock->discount = (($stock->mrp - $stock->price) / $stock->mrp) * 100;
//     $stock->save();

//     // $discount = (((($stock->mrp)-($stock->price))/($stock->mrp)) * 100);

//     // $data = compact('discount');
//     return redirect('/stock/view');
//     }

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
        $stock->tagline = $reqstockin['tagline'];
        $stock->description = $reqstockin['description'];
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

}
