<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\BrowserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryBackendController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\KindBackendController;
use App\Http\Controllers\TemplateBackendController;
use App\Http\Controllers\AuthorBackendController;


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
Route::resource('/browser',BrowserController::class);
Route::resource('/category',CategoryController::class);
Route::resource('/subcategory',SubcategoryController::class);
Route::resource('/country',CountryController::class);
Route::resource('/kind',KindController::class);
Route::resource('/template',TemplateController::class);
Route::resource('/author',AuthorController::class);
