<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Signup;

class SignupController extends Controller
{
    public function signup(){
    return view('main.signup');
    }

    public function create(Request $request){
    $request-> validate([
    'email'=>'required|unique:signup',
    'name'=>'required|regex:/^[a-zA-Z\s]*$/',
    'phone'=>'required',
    'pasword'=>'required|confirmed',
    ]);
    $signup = new Signup;
    $signup->email = $request['email'];
    $signup->name = $request['name'];
    $signup->phone = $request['phone'];
    $signup->password = $request['password'];
    $signup->save();

    return redirect('/stock/view');

    }
}
