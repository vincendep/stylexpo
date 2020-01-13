<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cart = \App\Cart::where('user_id', '=', Auth::id())->first();
        $item = \App\CartItem::make([
            'product_id' => $request->input('product'),
            'color_id' => $request->input('color'),
            'size_id' => $request->input('size'),
            'quantity' => $request->input('quantity')
        ]);
        $flag = false;
        foreach($cart->cartItems as $cartItem)
        {
            if ($cartItem->color == $item->color && $cartItem->size == $item->size && $cartItem->product == $item->product)
            {
                $cartItem->quantity += $item->quantity;
                $cartItem->save();
                $flag = true;
                break;
            }
        }
        if (!$flag)
        {
            $cart->cartItems()->save($item);
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart = \App\Cart::where('user_id', '=', Auth::id())->first();
        $item = $cart->cartItems->find($id);
        $item->delete();
        return back();
    }
}
