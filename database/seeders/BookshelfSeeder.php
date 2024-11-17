<?php

namespace Database\Seeders;

use App\Models\Bookshelf;
use Illuminate\Database\Seeder;

class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $dataBookshelfs = [
            ['code' => 'BS001','name'=> 'Manga'],
            ['code' => 'BS002','name'=> 'Novel'],
            ['code' => 'BS003','name'=> 'Manhwa'],
        ];

        foreach($dataBookshelfs as $item){
            Bookshelf::create($item);
        }
    }
}