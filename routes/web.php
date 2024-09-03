<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstControl;
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
Route::get('/stock', [FirstControl::class, 'stock']);
Route::post('/stock', [FirstControl::class, 'stockin']);
Route::get('/stock/view', [FirstControl::class, 'viewstock']);

Route::get('/stocke', function(){
        $stockroute = Stock::all();
        echo "<pre>";
        print_r($stockroute);
});

