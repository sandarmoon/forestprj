<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Browser;

class BrowserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array=['FireFox','Chrome','Safari','Opera','Edge','Brave','IE1','IE2','
        IE3','IE4','IE5','IE6','IE7','IE8','IE9','IE10','IE11'];

         foreach ($array as $value) {
        	
        		Browser::create([
        		'name'=>$value
        		]);
        	
        }
    }
}
