<?php

use App\Http\Controllers\HomePage;
use App\Http\Controllers\ProductsPage;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomePage::class, 'home']);
Route::get('/products', [ProductsPage::class, 'products']);
Route::get('/food_beverage', [ProductsPage::class, 'food_beverage']);
Route::get('/home_care', [ProductsPage::class, 'home_care']);
Route::get('/beauty_health', [ProductsPage::class, 'beauty_health']);
Route::get('/baby_kid', [ProductsPage::class, 'baby_kid']);
