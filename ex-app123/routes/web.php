<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('products/', ProductController::class);
Route::get('/products', ProductController::class .'@index')->name('products.index');
// returns the form for adding a product
Route::get('/products/create', ProductController::class . '@create')->name('products.create');
// adds a product to the database
Route::post('/products', ProductController::class .'@store')->name('products.store');
// returns a page that shows a full product
Route::get('/products/{product}', ProductController::class .'@show')->name('products.show');
// returns the form for editing a product
Route::get('/products/{product}/edit', ProductController::class .'@edit')->name('products.edit');
// updates a product
Route::put('/products/{product}', ProductController::class .'@update')->name('products.update');
// deletes a product
Route::delete('/products/{product}', ProductController::class .'@destroy')->name('products.destroy');
