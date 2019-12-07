<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Builder;
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

    public function shop($category = null)
    {
        $products;
        if ($category != null)
        {
            \App\Category::where('slug', $category)->firstOrFail();
            $products = \App\Product::whereHas('category', function (Builder $query) use($category) {
                $query->where('slug', 'like', $category);
            })->get();
        } 
        else
        {
            $products = \App\Product::all();
        }
        $bestSellers = $products->sortByDesc('selling_number')->take(3);
        $categories = \App\Category::all();

    	return view('shop', [
            'categories' => $categories,
            'products' => $products,
            'bestSellers' => $bestSellers
        ]);
    }

    public function shopList($category = null)
    {
        return view('shop-list');
    }

    public function productPage($productId)
    {
        $product = \App\Product::find($productId);
        $sizes = \App\Size::all();
        $colors = \App\Color::all();
        return view('product-page', [
            'product' => $product,
            'colors' => $colors,
            'sizes' => $sizes
        ]);
    }

    public function cart()
    { 
        return view('cart', ['cart' => session()->get('cart')]);
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function orderComplete()
    {
        return view('order-complete');
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
