<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addToCart(Request $request)
    {
    	$productId = $request->input('product');
    	$colorId = $request->input('color');
    	$quantity = $request->input('quantity');

    	$cart = session()->get('cart');
    	if (! $cart)
    	{
    		$cart = new \App\Cart();
    		$cart->save();
    		$user = auth()->user();
    		if ($user)
    		{
    			$cart->user()->save($user);
    		}
    	}
		$cartItem = $cart->cartItems()->where([
			['product_id', '=', $productId],
			['color_id', '=', $colorId]
		])->first();
		if (! $cartItem)
		{
			$cartItem = new \App\CartItem([
				'product_id' => $productId,
				'color_id' => $colorId,
				'quantity' => $quantity,
				'cart_id' => $cart->id
			]);
		}
		else
		{
			$cartItem->quantity = $cartItem->quantity + $quantity;
		}
		$cart->push();
		session()->put('cart', $cart);
    }
}
