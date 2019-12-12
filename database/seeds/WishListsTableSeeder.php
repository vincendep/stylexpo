<?php

use Illuminate\Database\Seeder;

class WishListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\WishList::create(['user_id' => 1]);
		\App\WishList::create(['user_id' => 2]); 
    }
}
