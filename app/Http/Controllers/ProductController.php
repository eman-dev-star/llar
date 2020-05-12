<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    public function index(){
    	$products=Product::inRandomOrder()->take('3')->get();
    	// dd($products);
    	return view('product.index',compact('products'));
    }
     public function show($slug){
    	$product=Product::where('slug',$slug)->firstOrFail();
    	// dd($products);
    	return view('product.show',compact('product'));
    }
}
