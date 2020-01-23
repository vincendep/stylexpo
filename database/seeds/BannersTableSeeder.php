<?php

use Illuminate\Database\Seeder;
use App\Banner;

class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Banner::count() == 0)
        {
        	Banner::create([
        		'title' => 'More Fashion Styles',
        		'sale_text' => 'UP TO 25% OFF',
        		'excerpt' => 'The latest fashion trends online.',
        		'image' => 'img/banner1.jpg'
        	]);

        	Banner::create([
        		'title' => 'Smart Watches For<br><span> Men & Women</span>',
        		'sale_text' => 'new look',
        		'excerpt' => 'Most Popular Brand Products 20% off',
        		'image' => 'img/banner2.jpg'
        	]);

        	Banner::create([
        		'title' => 'Get latest headphone',
        		'sale_text' => 'UP TO 30% OFF',
        		'excerpt' => 'Get the top brands for headphone',
        		'image' => 'img/banner3.jpg'
        	]);
        }
    }
}
