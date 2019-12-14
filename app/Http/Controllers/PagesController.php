<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
	public function home()
    {
    	$brands = \App\Brand::all();

        $newArrivals = \App\Product::orderBy('created_at', 'desc')
            ->take(20)
            ->get();

        $topCategories = \App\Category::orderBy('selling_number', 'desc')
            ->take(8)
            ->get();

        $bestSellers = \App\Product::orderBy('selling_number', 'desc')
            ->take(20)
            ->get();

        $dailyDeals = \App\Product::whereNotNull('sale')
            ->orderBy('sale', 'desc')
            ->take(10)
            ->get();

        return view('home', [
        	'brands' => $brands,
            'newArrivals' => $newArrivals,
            'topCategories' => $topCategories,
            'bestSellers' => $bestSellers,
            'dailyDeals' => $dailyDeals
        ]);
    }

    public function shop(Request $request, $category = null)
    {
        $product;
        if ($category)
        {
            \App\Category::where('slug', $category)->firstOrFail();
            $products = \App\Product::whereHas('category', function (Builder $query) use($category) {
                $query->where('slug', 'like', $category);
            });
        } else {
            $products = \App\Product::where('id', '>', 0);
        }
        $bestSellers = $products->get()->sortByDesc('selling_number')->take(3);
        
        $query = $request->input('q');
        $sizeParams = $request->input('size');
        $colorParams = $request->input('color');
        if ($query)
        {
            // TODO query string match
        }
        if ($sizeParams) 
        {
            $products = $products->whereHas('sizes', function($q) use($sizeParams) {
                $q->whereIn('name', $sizeParams);
            });
        }
        if ($colorParams)
        {
            $products = $products = $products->whereHas('colors', function($q) use($colorParams) {
                $q->whereIn('name', $colorParams);
            });
        }
        $products = $products->get();
        $sizes = \App\Size::all();
        $colors = \App\Color::all();

    	return view('shop', [
            'products' => $products,
            'bestSellers' => $bestSellers,
            'colors' => $colors,
            'sizes' => $sizes
        ]);
    }

    public function productPage($productId)
    {
        $product = \App\Product::findOrFail($productId);
        $sizes = \App\Size::all();
        $colors = \App\Color::all();
        $relatedProducts = \App\Product::where('brand_id', '=', $product->brand_id)
            ->orWhere('category_id', '=', $product->category_id)
            ->take(15)
            ->get()
            ->except($product->id);
        
        return view('product-page', [
            'product' => $product,
            'colors' => $colors,
            'sizes' => $sizes,
            'relatedProducts' => $relatedProducts
        ]);
    }

    public function cart()
    { 
        return view('cart');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function compare()
    {
        return view('compare');
    }

    public function wishList()
    {
        $wishList = \App\WishList::where('user_id', '=', Auth::id())->first();
        return view("wishlist", ['wishlist' => $wishList]);
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

    public function account()
    {
        return view('account');
    }
}
