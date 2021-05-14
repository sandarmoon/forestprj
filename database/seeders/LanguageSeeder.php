<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Language;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array=['Html','Css','React','Vue','Martial','Javascript','Bootstrap5','Bootstrap4','Angular'];

        foreach($array as $v){
        	Language::create([
        		'name'=>$v
        	]);
        }
    }
}
