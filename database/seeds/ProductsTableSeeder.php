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
        		'name' => 'Product 1',
        		'brand_id' => 1,
                'category_id' => 1
        	]);

        	Product::create([
        		'name' => 'Product 2',
        		'brand_id' => 2,
                'category_id' => 2
        	]);

        	Product::create([
        		'name' => 'Product 3',
        		'brand_id' => 3,
                'category_id' => 3
        	]);

        	Product::create([
        		'name' => 'Product 4',
        		'brand_id' => 4,
                'category_id' => 4
        	]);

        	Product::create([
        		'name' => 'Product 5',
        		'brand_id' => 5,
                'category_id' => 1
        	]);

        	Product::create([
        		'name' => 'Product 6',
        		'brand_id' => 6,
                'category_id' => 1,
                'sale' => 0.3
        	]);

        	Product::create([
        		'name' => 'Product 7',
        		'brand_id' => 7,
                'category_id' => 2
        	]);

        	Product::create([
        		'name' => 'Product 8',
        		'brand_id' => 8,
                'category_id' => 3
        	]);
        }
    }
}
