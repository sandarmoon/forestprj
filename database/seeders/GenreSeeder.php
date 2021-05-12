<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array=['Photography','Art','Portfolio','Business','Marketing','Government','Fashion','Hosting','Electornic','Events','Flim & Tv','Restaurants & Cakes','Music and Brands','Photo Gallery','Social Media Home','Food','Travel','Children','Health and Beauty'];

         foreach ($array as $value) {
        	
        		Genre::create([
        		'name'=>$value
        		]);
        	
        }
    }
}
