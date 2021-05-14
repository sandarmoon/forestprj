<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array=['United State','United KingDom','South Korea','Thailand','Philippines','Japan','Spain','France','Iceland','Italy','Australia','New Zealand','Indonesia'];
        foreach ($array as $value) {
        	
        		Country::create([
        		'name'=>$value
        		]);
        	
        }
    }
}
