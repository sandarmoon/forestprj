<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\FrontendController;
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
//     return view('backendtemplate');
// });



// backend admin
Route::get('dashboard',[BackendController::class,'dashboard'])->name('dashboard');

// frontend
Route::get('/',[FrontendController::class,'index'])->name('frontend.index');
Route::get('contactus',[FrontendController::class,'contact'])->name('frontend.contactus');
Route::get('author',[FrontendController::class,'author'])->name('frontend.author');
Route::get('cart',[FrontendController::class,'cart'])->name('frontend.cart');
Route::get('checkout',[FrontendController::class,'checkout'])->name('frontend.checkout');
Route::get('illustration',[FrontendController::class,'illustration'])->name('frontend.illustration');
Route::get('template',[FrontendController::class,'template'])->name('frontend.template');
Route::get('templates',[FrontendController::class,'templates'])->name('frontend.templates');
