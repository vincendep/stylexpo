<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WishItem extends Model
{
    protected $guarded = [];

    public function wishList()
    {
    	return $this->belongsTo('App\WishList');
    }

    public function product()
    {
    	return $this->belongsTo('App\Product');
    }
}
