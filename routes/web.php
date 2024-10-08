<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstControl;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MailController;
use App\Models\Stock;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


    Route::get('/', [FirstControl::class, 'products'])->name('products');
    Route::get('/contact', [FirstControl::class, 'contact'])->name('contact');
    Route::get('/home', [FirstControl::class, 'home'])->name('home');
    Route::get('/about', [FirstControl::class, 'about'])->name('about');
    Route::get('/category/{category}', [FirstControl::class, 'categorysort'])->name('categorysort');

Route::get('/dashboard', function () {
    return view('dashboard');})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group (function(){
    Route::get('/cart/store', [CartController::class, 'cart'])->name('cart');
    Route::post('/cart/store', [CartController::class, 'store']);
    Route::get('/cartcleared', [CartController::class, 'clearCart'])->name('clearcart');
    Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');
    Route::get('/ordersuccess', [MailController::class, 'sendMail'])->name('ordersuccess');
    Route::get('/myprofile/address/', [UserProfileController::class, 'newaddress']);
    Route::post('/myprofile/address/', [UserProfileController::class, 'create']);
    Route::get('/myprofile', [UserProfileController::class, 'myprofile'])->name('addresses');
    Route::get('/store', [UserProfileController::class, 'store']);
    Route::get('/myprofile/address/edit/{id}', [UserProfileController::class, 'editaddress'])->name('address.edit');
    Route::post('/myprofile/address/edit/{id}', [UserProfileController::class, 'updateaddress'])->name('address.update');
    Route::get('/myprofile/address/delete/{id}', [UserProfileController::class, 'deleteaddress'])->name('address.delete');
});

Route::middleware('auth')->group(function () {

Route::middleware('admin')->group(function () {
    Route::get('/stock', [FirstControl::class, 'stock'])->name('stock.index');
    Route::post('/stock', [FirstControl::class, 'stockin'])->name('stock.store');
    Route::get('/stock/view', [FirstControl::class, 'viewstock'])->name('stock.view');
    Route::get('/stock/edit/{id}', [FirstControl::class, 'editstock'])->name('stock.edit');
    Route::post('/stock/update/{id}', [FirstControl::class, 'updatestock'])->name('stock.update');
    Route::get('/stock/delete/{id}', [FirstControl::class, 'deletestock'])->name('stock.delete');
});

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});     

require __DIR__.'/auth.php';

Route::get('/mail', [MailController::class, 'sendMail']);