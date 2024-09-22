<?php

namespace App\Http\Controllers;

use App\Models\Contact;
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
    public function contact(Request $request){
        $data=$request->validate([
            'name'=>'required|string',
            'phone'=>'required|string',
            'email'=>'required|email',
            'message'=>'required|string',

        ]);
        Contact::create($data);
        return redirect()->back()->with('message','data sent successfully');
    }
}
