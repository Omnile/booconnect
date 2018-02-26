<?php

use App\Resturant;
use Illuminate\Database\Seeder;

class ResturantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Resturant::class, config('booconnect.seed.max'))->create();
    }
}
