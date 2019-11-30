<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function home()
    {
    	$brands = \App\Brand::all();
    	$categories = \App\Category::all();
    	$products = \App\Product::all();
        
        return view('home', [
        	'products' => $products,
        	'categories' => $categories,
        	'brands' => $brands
        ]);
    }

    public function shop()
    {
    	return view('shop');
    }

    public function about()
    {
    	return view('about');
    }

    public function blog()
    {
    	return view('blog');
    }

    public function contact()
    {
    	return view('contact');
    }
}
