<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstControl;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\UserProfileController;
use App\Models\Stock;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FirstControl::class, 'home']);
Route::get('/contact', [FirstControl::class, 'contact']);
Route::get('/products', [FirstControl::class, 'products']);
Route::get('/faq', [FirstControl::class, 'faq']);
Route::get('/about', [FirstControl::class, 'about']);
Route::get('/cart', [FirstControl::class, 'cart']);
Route::get('/stock', [FirstControl::class, 'stock']);
Route::post('/stock', [FirstControl::class, 'stockin']);
Route::get('/stock/view', [FirstControl::class, 'viewstock']);
Route::get('/stock/edit/{id}', [FirstControl::class, 'editstock'])->name('stock.edit');
Route::post('/stock/update/{id}', [FirstControl::class, 'updatestock'])->name('stock.update');
Route::get('/stock/delete/{id}', [FirstControl::class, 'deletestock'])->name('stock.delete');

//Signup Routes
Route::get('/signup', [SignupController::class, 'signup']);
Route::post('/signup', [SignupController::class,'create']);

//Address Routes
Route::get('/myprofile/address/', [UserProfileController::class, 'newaddress']);
Route::post('/myprofile/address/', [UserProfileController::class, 'create']);
Route::get('/myprofile', [UserProfileController::class, 'myprofile']);
Route::get('/store', [UserProfileController::class, 'store']);
Route::get('/myprofile/address/edit/{id}', [UserProfileController::class, 'editaddress'])->name('address.edit');
Route::post('/myprofile/address/edit/{id}', [UserProfileController::class, 'updateaddress'])->name('address.update');
Route::get('/myprofile/address/delete/{id}', [UserProfileController::class, 'deleteaddress'])->name('address.delete');


// Route::get('/stocke', function(){
//         $stockroute = Stock::all();
//         echo "<pre>";
//         print_r($stockroute->toarray());
// });

