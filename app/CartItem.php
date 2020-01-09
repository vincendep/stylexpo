<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
	protected $attributes = ['quantity' => 0];
	protected $guarded = [];

	public function product() 
	{
		return $this->belongsTo('App\Product');
	}

	public function color() 
	{
		return $this->belongsTo('App\Color');
	}       

	public function size() 
	{
		return $this->belongsTo('App\Size');
	}

	public function subTotal()
	{
		$subTotal = 0;
		$subTotal += $this->product->price * $this->quantity;
		if ($this->product->sale)
		{
			$subTotal -= ($this->product->price * $this->product->sale) * $this->quantity;
		}
	
    	return number_format((float)$subTotal, 2, '.', '');
	}
}
