<?php

use Illuminate\Database\Seeder;
use App\Brand;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Brand::count() == 0)
        {
        	Brand::create(['name' => 'Brand 1']);
    		Brand::create(['name' => 'Brand 2']);
        	Brand::create(['name' => 'Brand 3']);
        	Brand::create(['name' => 'Brand 4']);
        	Brand::create(['name' => 'Brand 5']);
        	Brand::create(['name' => 'Brand 6']);
            Brand::create(['name' => 'Brand 7']);
            Brand::create(['name' => 'Brand 8']);
    	}
    }
}
