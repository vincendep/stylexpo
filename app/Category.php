<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends \TCG\Voyager\Models\Category
{

	protected $attributes = [
		'thumbnail' => 'categories/categoryImageDefault.jpg'
	];

    public function products()
    {
    	return $this->hasMany('App\Product');
    }
}
