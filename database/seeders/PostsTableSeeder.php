<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Kosongkan semua data di tabel posts
         \DB::table('posts')->truncate();

         //Membangkitkan 6 data dummy di tabel posts
         $posts = [];	//inisialisasi variabel posts untuk menampung data
         $faker = Factory::create();

         for($i = 1; $i<=6; $i++)
         {
         	$image = "Post_Image_".rand(1,5).".jpg";
         	$date = date("Y-m-d H:i:s", strtotime("2021-04-20 10:00:00 + {$i} days"));
         	$posts[] =
         	[
         		'author_id' => rand(1,3),
         		'title' 	=> $faker->sentence(rand(10,15)),
         		'excerpt'	=> $faker->text(rand(200,300)),
         		'body'		=> $faker->paragraph(rand(8,12),true),
         		'slug'		=> $faker->slug(),
         		'image'		=> rand(0,1) == 1 ? $image :NULL,
         		'created_at'=> $date,
         		'updated_at'=> $date,
         	];
         }
         \DB::table('posts')->insert($posts);
    }
}
