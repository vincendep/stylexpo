<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{

	protected $guarded = [];

    public function cartItems()
    {
    	return $this->hasMany('App\CartItem');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function size()
    {
    	return $this->cartItems->count();
    }

    public function total()
    {
    	$total = 0;
    	foreach ($this->cartItems as $item)
    	{
    		$total += $item->product->price * $item->quantity;
    		if ($item->product->sale)
    		{
    			$total -= $item->product->price / $item->product->sale * $item->quantity;
    		}
    	}
    	return $total;
    }
}
