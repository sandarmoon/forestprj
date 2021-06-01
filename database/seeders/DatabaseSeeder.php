<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
         $this->call(
        [   CategorySeeder::class ,
            SubcategorySeeder::class ,
            GenreSeeder::class ,
            BrowserSeeder::class,
            CountrySeeder::class,
            LanguageSeeder::class,
            RoleSeeder::class
        ]
        );
        // $this->call(
        //     // BrowserSeeder::class
        //     // CountrySeeder::class
        //     // LanguageSeeder::class
        //     SubcategorySeeder::class
        // );
    }
}
