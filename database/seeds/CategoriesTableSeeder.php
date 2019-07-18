<?php

use Illuminate\Database\Seeder;
use App\Category;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{

    public function run()
    {
      $faker = Faker::create();

      for ($i=0; $i < 20; $i++) {
        $newcategory = New Category();
        $newcategory->name=$faker->sentence();
        $newcategory->slug=Str::slug($newcategory->name);
        $newcategory->save();
      }
    }
}
