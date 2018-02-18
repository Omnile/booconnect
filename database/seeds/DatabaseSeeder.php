<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (config('app.env') === 'local') {
            $this->call(UsersTableSeeder::class);
            $this->call(ResturantTableSeeder::class);
            $this->call(ItemsTableSeeder::class);
            $this->call(RatingsTableSeeder::class);
            $this->call(TransactionsTableSeeder::class);
            $this->call(PicturesTableSeeder::class);
        }
    }
}
