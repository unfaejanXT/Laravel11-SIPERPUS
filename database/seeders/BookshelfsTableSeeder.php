<?php

namespace Database\Seeders;

use App\Models\Bookshelf;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BookshelfsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bookshelf::insert([
            [
                'id' => '1',
                'code' => '620',
                'name' => 'Engineering'
            ],
            [
                'id' => '2',
                'code' => '621',
                'name' => 'Mechanical'
            ],
            [
                'id' => '3',
                'code' => '622',
                'name' => 'Topoographical'
            ],
        ]);
    }
}
