<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class FrontendController extends Controller
{
    //
  public function index()
  {
    $latestitems = Item::orderBy('id','desc')->limit(4)->get();
    $freesimplies = Item::where('status','Free')->orderBy('id','desc')->limit(4)->get();
    return view('frontend.index',compact('latestitems','freesimplies'));
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
