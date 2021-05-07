<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
        $this-> call (ProductsSeeder::class);
        $this-> call (ImagesSeeder::class);
        $this-> call (CategoriesSeeder::class);
        $this-> call (Products_has_CategoriesSeeder::class);
    }
}
