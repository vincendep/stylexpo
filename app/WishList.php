<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
    public function wishItems()
    {
    	return $this->hasMany('App\WishItem');
    }

    public function size()
    {
    	return $this->wishItems->count();
    }
}
