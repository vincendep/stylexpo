<?php

use Illuminate\Database\Seeder;
use \App\Cart;

class CartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Cart::count() == 0)
        {
            Cart::create(['user_id' => 1]);
            Cart::create(['user_id' => 2]); 
        }
    }
}
