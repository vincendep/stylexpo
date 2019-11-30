<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Product::count() == 0)
        {
        	Product::create([
        		'name' => 'product1',
        		'brand_id' => 1
        	]);

        	Product::create([
        		'name' => 'product2',
        		'brand_id' => 2
        	]);

        	Product::create([
        		'name' => 'product3',
        		'brand_id' => 3
        	]);

        	Product::create([
        		'name' => 'product4',
        		'brand_id' => 4
        	]);

        	Product::create([
        		'name' => 'product6',
        		'brand_id' => 5
        	]);

        	Product::create([
        		'name' => 'product6',
        		'brand_id' => 6
        	]);

        	Product::create([
        		'name' => 'product7',
        		'brand_id' => 6
        	]);

        	Product::create([
        		'name' => 'product8',
        		'brand_id' => 6
        	]);
        }
    }
}
