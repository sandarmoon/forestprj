<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Wishlist;
use App\Models\Collection;
use Auth;

class FrontendController extends Controller
{
    //
  public function index()
  {
    $latestitems = Item::orderBy('id','desc')->limit(4)->get();
    $wishlists = Wishlist::where('user_id',Auth::id())->get();
    $freesimplies = Item::where('status','Free')->orderBy('id','desc')->limit(4)->get(); 
    
    return view('frontend.index',compact('latestitems','wishlists','freesimplies'));
  }

  public function wishlist(Request $request)
  {
    $tab = 1;
    $wishlists = Wishlist::where('user_id',Auth::id())->get();
    $collections = Collection::where('user_id',Auth::id())->get();
   
    return view('account.mydashboard',compact('collections','wishlists','tab'));
  }

  public function getwishlist(Request $request)
  {
    $wishlists = Wishlist::where('user_id',Auth::id())
                ->with(array('item'=>function($query){

                    $query->with(array('author'=>function($q){
                      $q->with('user');

                    }));

                    $query->with('subcategory');

                }))->get();
   
    return response()->json($wishlists);
  }


  public function collection()
  {
    $tab = 2;
    $collections = Collection::where('user_id',Auth::id())->get();
    $wishlists = Wishlist::where('user_id',Auth::id())->get();
    return view('account.mydashboard',compact('collections','wishlists','tab'));
  }

  public function contact()
  {
    return view('frontend.contact');
  }

  public function author()
  {
    return view('frontend.author');
  }

  public function cart()
  {
    return view('frontend.cart');
  }

  public function checkout()
  {
    return view('frontend.checkout');
  }

   public function illustration()
  {
    return view('frontend.illustration');
  }

  public function template()
  {
    return view('frontend.template');
  }

   public function templates()
  {
    return view('frontend.templates');
  }
}
