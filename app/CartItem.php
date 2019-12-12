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
}
