<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        //$categories = Category::all();
        //return view('frontend.index', compact('categories'));
        return view('frontend.index');
    }
    public function mail()
    {
        //$categories = Category::all();
        //return view('frontend.index', compact('categories'));
        return view('frontend.mail');
    }
    public function product()
    {
        //$categories = Category::all();
        //return view('frontend.index', compact('categories'));
        return view('frontend.product');
    }
    public function checkout()
    {
        
     //   $categories = Category::all();
      //  return view('frontend.index', compact('categories'));
        return view('frontend.checkout');
	}
	public function payment()
    {
        //$categories = Category::all();
        //return view('frontend.index', compact('categories'));
        return view('frontend.payment');
    }
}

