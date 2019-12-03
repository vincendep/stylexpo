<?php

use Illuminate\Database\Seeder;
use App\Size;

class SizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Size::create(['name' => 's']);
        Size::create(['name' => 'm']);
        Size::create(['name' => 'l']);
        Size::create(['name' => 'xl']);
    }
}
