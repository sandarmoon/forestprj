<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BackendController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BrowserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CollectionController;




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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// Route::get('/', function () {
//     return view('backendtemplate');
// });



// backend admin
Route::get('dashboard',[BackendController::class,'dashboard'])->name('dashboard')->middleware('auth');
Route::resource('/browser',BrowserController::class);
Route::resource('/category',CategoryController::class);
Route::resource('/country',CountryController::class);
Route::resource('/subcategory',SubcategoryController::class);
Route::resource('/language',LanguageController::class);

Route::resource('/genres',GenresController::class);

Route::group(['middleware' => ['role:author']], function () {
  Route::resource('/item',ItemController::class);
  Route::get('itemtype',[ItemController::class,'itemtype'])->name('itemtype');
  Route::get('itemtypeedit',[ItemController::class,'itemtypeedit'])->name('itemtypeedit');
});

Route::resource('/author',AuthorController::class);

Route::get('/category_index',[CategoryController::class,'category_index'])->name('category_index');



// frontend
Route::get('/',[FrontendController::class,'index'])->name('frontend.index');
Route::get('contactus',[FrontendController::class,'contact'])->name('frontend.contactus');
Route::get('author',[FrontendController::class,'author'])->name('frontend.author');
Route::get('cart',[FrontendController::class,'cart'])->name('frontend.cart');
Route::get('checkout',[FrontendController::class,'checkout'])->name('frontend.checkout');
Route::get('illustration',[FrontendController::class,'illustration'])->name('frontend.illustration');
Route::get('template',[FrontendController::class,'template'])->name('frontend.template');
Route::get('templates',[FrontendController::class,'templates'])->name('frontend.templates');


// nyi
Route::resource('mywishlist',WishlistController::class);
Route::resource('mycollection',CollectionController::class);

Route::get('wishlist',[FrontendController::class,'wishlist'])->name('wishlist');
Route::get('getwishlist',[FrontendController::class,'getwishlist'])->name('getwishlist');

Route::get('collection',[FrontendController::class,'collection'])->name('collection');



//author route

Route::get('/author/create',[AuthorController::class,'create'])->name('author.create');




require __DIR__.'/auth.php';
