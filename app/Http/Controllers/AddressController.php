<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
