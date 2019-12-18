<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function orderLines()
    {
    	return $this->hasMany('App\OrderLine');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function total()
    {
    	$total = 0;
    	foreach ($this->orderLines as $item)
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
