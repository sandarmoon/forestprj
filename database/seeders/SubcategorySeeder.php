<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subcategory;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array=['Creative','Corporate','Retail','Technology','Nonprofit','Entertainment','Personal','Admin Template','Mobile','Wedding'];

        foreach ($array as $value) {
        	
        		Subcategory::create([
        		'name'=>$value,
        		'category_id'=>rand(1,11)
        		]);
        	
        }
    }
}
