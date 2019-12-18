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

    public function checkout()
    {
        $order = new Order();
        $order->user_id = $this->user->id;
        $order->save();
        foreach ($this->cartItems as $item)
        {
            $order->orderLines->push(OrderLine::make([
                'order_id' => $order->id,
                'product_id' => $item->product->id,
                'quantity' => $item->quantity,
                'color_id' => $item->color->id,
                'size_id' => $item->size->id
            ]));
        }
        $order->push();
        foreach ($this->cartItems as $item)
        {
            $item->product->selling_number += $item->quantity;
            $item->product->save();
            $item->product->brand->selling_number += $item->quantity;;
            $item->product->brand->save();
            $item->delete();
        }
    }
}
