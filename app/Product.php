<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $attributes = [
    	'price' => 99.99,
    	'thumbnail' => "https://via.placeholder.com/750x972.png?text=Product",
    	'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nunc erat, posuere eget augue vel, faucibus efficitur dui. Quisque fringilla maximus purus, id auctor arcu. Phasellus leo massa, ultricies eu ante a, lobortis tincidunt elit. Proin lacus magna, ornare vel metus id, varius suscipit dolor. In elementum ut eros sit.'
    ];

    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    public function images()
    {
        return $this->hasMany('App\ProductImage');
    }

    public function sizes()
    {
        return $this->belongsToMany('App\Size');
    }

    public function colors()
    {
        return $this->belongsToMany('App\Color');
    }

    public function discountPrice()
    {
        if ($this->sale)
        {
            $p =  $this->price - $this->price * $this->sale;
            return number_format((float)$p, 2, '.', '');
        } else {
            return $this->price;
        }
    }
}
