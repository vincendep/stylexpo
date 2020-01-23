<?php

use Illuminate\Database\Seeder;
use \App\ColorProduct;

class ColorProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (ColorProduct::count() == 0) 
        {
            DB::table('color_product')->insert(['product_id' => 1, 'color_id' => 1]);
            DB::table('color_product')->insert(['product_id' => 1, 'color_id' => 2]);
            DB::table('color_product')->insert(['product_id' => 1, 'color_id' => 3]);
            DB::table('color_product')->insert(['product_id' => 1, 'color_id' => 4]);
               
            DB::table('color_product')->insert(['product_id' => 2, 'color_id' => 3]);
            DB::table('color_product')->insert(['product_id' => 2, 'color_id' => 4]);
            DB::table('color_product')->insert(['product_id' => 2, 'color_id' => 5]);
            
            DB::table('color_product')->insert(['product_id' => 3, 'color_id' => 2]);
            DB::table('color_product')->insert(['product_id' => 3, 'color_id' => 3]);
            DB::table('color_product')->insert(['product_id' => 3, 'color_id' => 4]);
            
            DB::table('color_product')->insert(['product_id' => 4, 'color_id' => 1]);
            DB::table('color_product')->insert(['product_id' => 4, 'color_id' => 3]);
            DB::table('color_product')->insert(['product_id' => 4, 'color_id' => 4]);
            
            DB::table('color_product')->insert(['product_id' => 5, 'color_id' => 1]);
            DB::table('color_product')->insert(['product_id' => 5, 'color_id' => 4]);
            DB::table('color_product')->insert(['product_id' => 5, 'color_id' => 5]);   
        }
    }
}
