<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
	public function shipping(Request $request)
	{
		$cart = Auth::user()->cart;
		if ($cart->cartItems->first())
		{
			session(['cart'=> $cart]);
		}
		return view('checkout', [
			'user' => Auth::user()
		]);
	}

	public function orderOverview(Request $request)
	{
		if(!session('cart'))
		{
			return redirect('/');
		}
		$billingAddress = \App\Address::where('address_type', '=', 'billing')
            ->where('user_id', '=', Auth::id())->first();
        $shippingAddress = \App\Address::where('address_type', '=', 'shipping')
            ->where('user_id', '=', Auth::id())->first();
        if (!$shippingAddress)
        {
            $shippingAddress = new \App\Address();
            $shippingAddress->user_id = Auth::id();
            $shippingAddress->address_type = 'shipping';
        }
        $shippingAddress->user_name = $request->input('shippingname');
        $shippingAddress->email = $request->input('shippingemail');
        $shippingAddress->address = $request->input('shippingaddress');
        $shippingAddress->company_name = $request->input('shippingcompany');
        $shippingAddress->contact_number = $request->input('shippingcontact');
        $shippingAddress->landmark = $request->input('shippinglandmark');
        $shippingAddress->country = $request->input('shippingcountry');
        $shippingAddress->city = $request->input('shippingcity');
        $shippingAddress->postcode = $request->input('shippingpostcode');
        $shippingAddress->save();

        if (!$billingAddress)
        {
            $billingAddress = new \App\Address();
            $billingAddress->user_id = Auth::id();
            $billingAddress->address_type = 'billing';
        }
        $billingAddress->user_name = $request->input('billingname');
        $billingAddress->email = $request->input('billingemail');
        $billingAddress->address = $request->input('billingaddress');
        $billingAddress->company_name = $request->input('billingcompany');
        $billingAddress->contact_number = $request->input('billingcontact');
        $billingAddress->landmark = $request->input('billinglandmark');
        $billingAddress->country = $request->input('billingcountry');
        $billingAddress->city = $request->input('billingcity');
        $billingAddress->postcode = $request->input('billingpostcode');
        $billingAddress->save();

        return view('order-overview', [
        	'cart' => Auth::user()->cart,
        	'user' => Auth::user()
        ]);
	}

    public function payment()
    {
    	if(!session('cart'))
		{
			return redirect('/');
		}
        return view('payment');
    }

    public function orderComplete()
    {
    	if(!session('cart'))
		{
			return redirect('/');
		}
        $cart = session('cart');
        $order = $cart->checkout();
        session()->forget('cart');
        return view('order-complete', [
                'order' => $order,
                'user' => Auth::user()
        ]);
    }
}
