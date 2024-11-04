<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Get bookshelf IDs
        $bookshelfIds = DB::table('bookshelfs')->pluck('id')->toArray();

        for ($i = 0; $i < 20; $i++) {
            DB::table('books')->insert([
                'title' => $faker->sentence(3),
                'author' => $faker->name,
                'year' => $faker->year,
                'publisher' => $faker->company,
                'city' => $faker->city,
                'cover' => $faker->imageUrl(300, 400, 'books', true),
                'bookshelf_id' => $faker->randomElement($bookshelfIds),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
