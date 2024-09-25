<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userprofile;

class UserProfileController extends Controller
{
    public function newaddress(){
        $url = url('/myprofile/address/');
        $heading = "Add New Address";
        $data = compact('url', 'heading');
        return view('main.address')->with($data);
        }

    public function create(Request $request){
    $request->validate([
        'name' => 'required',
        'email' => 'email',
        'phone' => 'required',
        'gender' => 'required',
        'address1' => 'required',
        'address2' => 'required',
        'address3' => 'nullable',
        'city' => 'required',
        'state' => 'required',
        'pincode' => 'required|numeric',
        'type' => 'required',
        ]);
        $address = new userprofile;
        $address->user_id = \Illuminate\Support\Facades\Auth::id();
        $address->name = $request['name'];
        $address->email = \Illuminate\Support\Facades\Auth::user()->email;
        $address->phone = $request['phone'];
        $address->gender = $request['gender'];
        $address->address1 = $request['address1'];
        $address->address2 = $request['address2'];
        $address->city = $request['city'];
        $address->state = $request['state'];
        $address->pincode = $request['pincode'];
        $address->type = $request['type'];
        $address->save();
        return redirect('/myprofile');
        }

    public function myprofile(){
        $user = \Illuminate\Support\Facades\Auth::user();
        $address = $user->addresses;
        if(!is_null($address)){
        $data = compact('address');
        return view('main.myprofile')->with($data );
            }
        else{
            return view('main.noaddress');
                }
        }

public function editaddress($addressid){
    $address = userprofile::find($addressid);
    if(is_null($address)){
        return redirect('/myprofile');
        }
    else{
        $url = url('/myprofile/address/edit')."/".$addressid;
        $heading = "Edit Address Details";
        $data = compact('url', 'heading', 'address');
        return view('main.address')->with($data);
        }

    }

public function updateaddress($addressid, Request $request){
        $address = userprofile::find($addressid);
        $address->addressid = $addressid;
        $address->user_id = \Illuminate\Support\Facades\Auth::id();
        $address->name = $request['name'];
        $address->email = \Illuminate\Support\Facades\Auth::user()->email;
        $address->phone = $request['phone'];
        $address->gender = $request['gender'];
        $address->address1 = $request['address1'];
        $address->address2 = $request['address2'];
        $address->city = $request['city'];
        $address->state = $request['state'];
        $address->pincode = $request['pincode'];
        $address->type = $request['type'];
        $address->save();
        return redirect('/myprofile')->with($addressid);


    }

public function deleteaddress($addressid){
    $address = userprofile::find($addressid);
    if(!is_null($address)){
        $address->delete();
        }
    return redirect('/myprofile');

    }


}
