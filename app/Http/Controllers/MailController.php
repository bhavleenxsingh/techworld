<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmOrder;
use Illuminate\Support\Facades\Auth;

class MailController extends Controller
{
    //
public function sendMail(){

    $user = Auth::user();

    if (!$user) {
        return response()->json(['error' => 'User not authenticated'], 401);
    }

    $to = $user->email;
    $subject = "Order Confirmation";
    $msg = " ";
    Mail::to($to)->send(new ConfirmOrder($msg, $subject));

    return view('main.ordersuccess');

}
}
