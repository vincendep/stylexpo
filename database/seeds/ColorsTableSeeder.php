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
        Color::create(['name' => 'red']);
     	Color::create(['name' => 'blu']);
        Color::create(['name' => 'black']);
        Color::create(['name' => 'white']);
        Color::create(['name' => 'grey']);
        Color::create(['name' => 'yellow']);
        Color::create(['name' => 'green']);  
    }
}
