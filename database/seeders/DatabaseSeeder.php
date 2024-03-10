<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
 /**
  * Seed the application's database.
  */
 public function run(): void
 {
  // \App\Models\User::factory(10)->create();

  // \App\Models\User::factory()->create([
  //     'name' => 'Test User',
  //     'email' => 'test@example.com',
  // ]);

  User::create([
   'name' => 'Muhammad Ferdynan',
   'email' => 'muhferdynan@gmail.com',
   'password' => bcrypt('12345'),
  ]);
  User::create([
   'name' => 'Ali Syahbana',
   'email' => 'alisyahbana@gmail.com',
   'password' => bcrypt('12345'),
  ]);

  Category::create([
   'name' => 'Web Programming',
   'slug' => 'web-programming',
  ]);

  Category::create([
   'name' => 'Personal',
   'slug' => 'personal',
  ]);

  Post::create([
   'title' => 'Judul Pertama',
   'slug' => 'judul-pertama',
   'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis ipsum atque odio numquam corrupti!',
   'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis ipsum atque odio numquam corrupti! Est recusandae ratione laborum enim asperiores atque perferendis ducimus deserunt commodi dolore. Iste impedit architecto cupiditate corporis nam, repudiandae asperiores? Totam quae officia praesentium eos illo, quaerat unde velit? Perspiciatis molestias nulla recusandae sunt. Amet atque aliquid aperiam commodi, eius dolores qui suscipit voluptatem maiores minima, unde sapiente placeat distinctio, consequatur fugit eos? Soluta voluptatibus harum ipsam veniam? Sequi fugiat, quaerat sapiente saepe voluptate numquam iure amet delectus ratione hic. Officia explicabo ipsa repellat nulla voluptates, ipsum illo. Hic ipsam eum at ex delectus, veritatis expedita!',
   'category_id' => 1,
   'user_id' => 1,
  ]);

  Post::create([
   'title' => 'Judul Kedua',
   'slug' => 'judul-kedua',
   'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis ipsum atque odio numquam corrupti!',
   'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis ipsum atque odio numquam corrupti! Est recusandae ratione laborum enim asperiores atque perferendis ducimus deserunt commodi dolore. Iste impedit architecto cupiditate corporis nam, repudiandae asperiores? Totam quae officia praesentium eos illo, quaerat unde velit? Perspiciatis molestias nulla recusandae sunt. Amet atque aliquid aperiam commodi, eius dolores qui suscipit voluptatem maiores minima, unde sapiente placeat distinctio, consequatur fugit eos? Soluta voluptatibus harum ipsam veniam? Sequi fugiat, quaerat sapiente saepe voluptate numquam iure amet delectus ratione hic. Officia explicabo ipsa repellat nulla voluptates, ipsum illo. Hic ipsam eum at ex delectus, veritatis expedita!',
   'category_id' => 1,
   'user_id' => 1,
  ]);

  Post::create([
   'title' => 'Judul Ketiga',
   'slug' => 'judul-ketiga',
   'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis ipsum atque odio numquam corrupti!',
   'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis ipsum atque odio numquam corrupti! Est recusandae ratione laborum enim asperiores atque perferendis ducimus deserunt commodi dolore. Iste impedit architecto cupiditate corporis nam, repudiandae asperiores? Totam quae officia praesentium eos illo, quaerat unde velit? Perspiciatis molestias nulla recusandae sunt. Amet atque aliquid aperiam commodi, eius dolores qui suscipit voluptatem maiores minima, unde sapiente placeat distinctio, consequatur fugit eos? Soluta voluptatibus harum ipsam veniam? Sequi fugiat, quaerat sapiente saepe voluptate numquam iure amet delectus ratione hic. Officia explicabo ipsa repellat nulla voluptates, ipsum illo. Hic ipsam eum at ex delectus, veritatis expedita!',
   'category_id' => 2,
   'user_id' => 1,
  ]);

  Post::create([
   'title' => 'Judul Keempat',
   'slug' => 'judul-keempat',
   'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis ipsum atque odio numquam corrupti!',
   'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis ipsum atque odio numquam corrupti! Est recusandae ratione laborum enim asperiores atque perferendis ducimus deserunt commodi dolore. Iste impedit architecto cupiditate corporis nam, repudiandae asperiores? Totam quae officia praesentium eos illo, quaerat unde velit? Perspiciatis molestias nulla recusandae sunt. Amet atque aliquid aperiam commodi, eius dolores qui suscipit voluptatem maiores minima, unde sapiente placeat distinctio, consequatur fugit eos? Soluta voluptatibus harum ipsam veniam? Sequi fugiat, quaerat sapiente saepe voluptate numquam iure amet delectus ratione hic. Officia explicabo ipsa repellat nulla voluptates, ipsum illo. Hic ipsam eum at ex delectus, veritatis expedita!',
   'category_id' => 2,
   'user_id' => 2,
  ]);
 }
}
