<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
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
        $newpost = New Post();
        $newpost->title=$faker->sentence();
        $newpost->content=$faker->text(2000);
        $newpost->author=$faker->firstname . " " . $faker->lastname;
        $newpost->slug=Str::slug($newpost->title);
        $newpost->save();
      }
    }
}
