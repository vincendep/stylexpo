<?php

use Illuminate\Database\Seeder;
use \App\WishList;

class WishListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (WishList::count() == 0)
        {
            \App\WishList::create(['user_id' => 1]);
            \App\WishList::create(['user_id' => 2]); 
        }
    }
}
