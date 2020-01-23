<?php

use Illuminate\Database\Seeder;
use App\SubBanner;

class SubBannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (SubBanner::count() == 0)
        {
        	SubBanner::create([
        		'title' => 'most popular sunglasses',
        		'excerpt' => 'Latest, Stylish and Trendy Collection',
        		'category_id' => 1,
        		'image' => 'img/sub-banner1.jpg'
        	]);

        	SubBanner::create([
        		'title' => 'shoes & footwear',
        		'excerpt' => 'Range of footwear & shoes for men & women',
        		'category_id' => 2,
        		'image' => 'img/sub-banner2.jpg'
        	]);

        	SubBanner::create([
        		'title' => 'shop watches online',
        		'excerpt' => 'Latest range of Digital & Analog Watches',
        		'category_id' => 3,
        		'image' => 'img/sub-banner3.jpg'
        	]);
        }
    }
}
