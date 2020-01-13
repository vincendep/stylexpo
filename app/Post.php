<?php


namespace App;


use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Post extends Model
{
   function category()
   {
   		return $this->belongsTo('App\Category');
   }
}
