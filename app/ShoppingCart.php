<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    public function cartItems()
    {
    	return $this->hasMany('App\CartItem');
    }
}
