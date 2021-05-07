<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductHasCategory;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class Products_has_CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ProductHasCategory::factory(50)->create();

        $faker = Faker::create();
        DB::table('products_has_categories')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'category_id' => 1,
            'product_id' => 1
        ]);
        DB::table('products_has_categories')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'category_id' => 3,
            'product_id' => 2
        ]);
        DB::table('products_has_categories')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'category_id' => 4,
            'product_id' => 2
        ]);
        DB::table('products_has_categories')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'category_id' => 4,
            'product_id' => 3
        ]);


        DB::table('products_has_categories')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'category_id' => 4,
            'product_id' => 5
        ]);
        DB::table('products_has_categories')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'category_id' => 2,
            'product_id' => 4
        ]);
        DB::table('products_has_categories')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'category_id' => 3,
            'product_id' => 5
        ]);


        DB::table('products_has_categories')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'category_id' => 4,
            'product_id' => 5
        ]);
        DB::table('products_has_categories')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'category_id' => 3,
            'product_id' => 6
        ]);


        DB::table('products_has_categories')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'category_id' => 4,
            'product_id' => 6
        ]);
    }
}
