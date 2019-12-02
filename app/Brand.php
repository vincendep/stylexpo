<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $attributes = [
    	'logo' => 'https://via.placeholder.com/170x120.png?text=brand'
    ];

    public function products()
    {
        return $this->hasMany('App\Product');
    }
    
}
