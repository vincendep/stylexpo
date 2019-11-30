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
        	Brand::create([
        		'name' => 'brand1', 'logo' => 'https://via.placeholder.com/170x120.png?text=brand'
        	]);
    		Brand::create([
    			'name' => 'brand2', 'logo' => 'https://via.placeholder.com/170x120.png?text=brand'
        	]);
        	Brand::create([
    			'name' => 'brand3', 'logo' => 'https://via.placeholder.com/170x120.png?text=brand'
        	]);
        	Brand::create([
    			'name' => 'brand4', 'logo' => 'https://via.placeholder.com/170x120.png?text=brand'
        	]);
        	Brand::create([
    			'name' => 'brand5', 'logo' => 'https://via.placeholder.com/170x120.png?text=brand'
        	]);
        	Brand::create([
    			'name' => 'brand6', 'logo' => 'https://via.placeholder.com/170x120.png?text=brand'
        	]);
            Brand::create([
                'name' => 'brand7', 'logo' => 'https://via.placeholder.com/170x120.png?text=brand'
            ]);
            Brand::create([
                'name' => 'brand8', 'logo' => 'https://via.placeholder.com/170x120.png?text=brand'
            ]);
    	}
    }
}
