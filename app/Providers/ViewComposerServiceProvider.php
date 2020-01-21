<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $cart = \App\Cart::where('user_id', '=', Auth::id())->first();
            $categories = \App\Category::all();
            $pages = \App\Page::where('status', '=', 'ACTIVE')->get();
            
            $view->with('categories', $categories)
                ->with('cart', $cart)
                ->with('pages', $pages);
        });
    }
}
