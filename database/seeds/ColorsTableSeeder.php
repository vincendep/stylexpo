<?php

use Illuminate\Database\Seeder;
use App\Color;

class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Color::create(['name' => 'rosso']);
     	Color::create(['name' => 'blu']);
        Color::create(['name' => 'nero']);
        Color::create(['name' => 'bianco']);
        Color::create(['name' => 'grigio']);
        Color::create(['name' => 'giallo']);
        Color::create(['name' => 'verde']);  
    }
}
