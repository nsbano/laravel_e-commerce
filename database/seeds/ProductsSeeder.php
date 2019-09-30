<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
for ($i=0; $i < 20; $i++) {
  \DB::table('products')->insert(array(
         'id' => $faker->randomElement,
         'name' => $faker->randomElement,
         'description'  => $faker->randomElement,
         'price' => $faker->randomEelement,
         'image' => $faker->randomElement,
         'created_at' => date('Y-m-d H:m:s'),
         'updated_at' => date('Y-m-d H:m:s'),
  ));
}
    }
}
