<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cart = \App\Cart::find($id);
        foreach ($cart->cartItems as $item)
        {
            if ($request->input($item->id))
            {
                $item->quantity = $request->input($item->id);
                $item->save();
            }
        }
        return back();
    }
}
