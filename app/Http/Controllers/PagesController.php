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

    public function shop(Request $request)
    {
        $category = $request->input('category');
        // TODO query string match
        $query = $request->input('q');
        
        $products;
        if ($category != null && $category != 'all')
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

    	return view('shop', [
            'products' => $products,
            'bestSellers' => $bestSellers
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
