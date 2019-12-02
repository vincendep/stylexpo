<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends \TCG\Voyager\Models\Category
{

	protected $attributes = [
		'thumbnail' => 'https://via.placeholder.com/430x500.jpg?text=Category'
	];

    public function products()
    {
    	return $this->hasMany('App\Product');
    }
}
