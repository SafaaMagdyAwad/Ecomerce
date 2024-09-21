<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
        $featured=Product::with('category')->take(4)->get();
        $newarrivals=Product::with('category')->latest()->get();
        $onsale=Product::with('category')->where('sale',1)->latest()->get();
        // dd($newarrivals);
        return view('index',compact('featured','newarrivals','onsale'));
    }
    public function cart(){
        return view('cart');
    }
    public function checkout(){
        return view('checkout');
    }
}
