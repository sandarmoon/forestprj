<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
  public function index()
  {
    return view('frontend.index');
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
