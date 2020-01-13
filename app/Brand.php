<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $attributes = [
    	'logo' => 'brands/brandLogoDefault.png'
    ];

    public function products()
    {
        return $this->hasMany('App\Product');
    }

}
