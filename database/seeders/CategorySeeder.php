<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array=[
        	['name'=>'Site Templates','fee'=>'6'],
        	['name'=>'WordPress','fee'=>'10'],
        	['name'=>'CMS Themes','fee'=>'5'],
        	['name'=>'Ecommerce','fee'=>'10'],
        	['name'=>'Blogging','fee'=>'13'],
        	['name'=>'Marketing','fee'=>'13'],
        	['name'=>'Forums','fee'=>'23'],
        	['name'=>'Muse Templates','fee'=>'33'],
        	['name'=>'Static Sites','fee'=>'23'],
        	['name'=>'Courses','fee'=>'30'],
        	['name'=>'UI Templates','fee'=>'32']];

        foreach ($array as $value) {
        	
        		Category::create([
        		'name'=>$value['name'],
        		'regularfee'=>$value['fee']
        		]);
        	
        }
    }
}
