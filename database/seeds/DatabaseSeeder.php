<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
     public function run()
     {
       factory(Product::class, 40)->create();
       //factory(User::class, 10)->create();
     }
}
