<?php

use Illuminate\Database\Seeder;
use \App\ProductSize;

class ProductSizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (ProductSize::count() == 0)
        {
            DB::table('product_size')->insert(['product_id' => 3, 'size_id' => 1]);
            DB::table('product_size')->insert(['product_id' => 3, 'size_id' => 2]);
            DB::table('product_size')->insert(['product_id' => 3, 'size_id' => 3]);
            DB::table('product_size')->insert(['product_id' => 3, 'size_id' => 4]);
            
            DB::table('product_size')->insert(['product_id' => 1, 'size_id' => 1]);
            DB::table('product_size')->insert(['product_id' => 1, 'size_id' => 2]);
            DB::table('product_size')->insert(['product_id' => 1, 'size_id' => 3]);
            
            DB::table('product_size')->insert(['product_id' => 4, 'size_id' => 1]);
            DB::table('product_size')->insert(['product_id' => 4, 'size_id' => 2]);
            DB::table('product_size')->insert(['product_id' => 4, 'size_id' => 4]);
            
            DB::table('product_size')->insert(['product_id' => 7, 'size_id' => 3]);
            DB::table('product_size')->insert(['product_id' => 7, 'size_id' => 4]);
            
            DB::table('product_size')->insert(['product_id' => 8, 'size_id' => 1]);
            DB::table('product_size')->insert(['product_id' => 8, 'size_id' => 2]);
            DB::table('product_size')->insert(['product_id' => 8, 'size_id' => 3]);
        }  
    }
}
