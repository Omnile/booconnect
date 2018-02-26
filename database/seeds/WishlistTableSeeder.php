<?php

use App\Wishlist;
use Illuminate\Database\Seeder;

class WishlistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Wishlist::class, config('booconnect.seed.max'))->create();
        //
    }
}
