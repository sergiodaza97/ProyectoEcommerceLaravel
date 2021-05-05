<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('products')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'name' => 'Camiseta Philipp Plein Calavera',
            'description' => 'playera con motivo Calavera  
            Detalle de cristal, cuello redondo, manga corta y dobladillo recto. Material: algodón.',
            'price' => 55000,
            'available' => 10
        ]);
        DB::table('products')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'name' => 'Sudadera Caballero',
            'description' => 'Conjunto de ropa deportiva para hombre, chándales activos, sudaderas con capucha, chaqueta, abrigo con capucha, ropa de marca de invierno',
            'price' => 160000,
            'available' => 5
        ]);
        DB::table('products')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'name' => 'Buso Versace',
            'description' => 'sudadera con bordado Medusa Versace
            Motivo de cabeza de Medusa, diseño bordado, cuello redondo, manga larga y dobladillo recto. Material: algodón.
            
            Hecho en Italia',
            'price' => 69000,
            'available' => 1
        ]);
        DB::table('products')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'name' => 'Jean Dsquared',
            'description' => 'Trabillas, botón y cierre en la parte delantera, diseño clásico de cinco bolsillos, efecto descolorido y diseño largo. con parches',
            'price' => 25900,
            'available' => 3
        ]);
        DB::table('products')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'name' => 'Chaqueta Versace',
            'description' => 'Trabillas, botón y cierre en la parte delantera, diseño clásico de cinco bolsillos, efecto descolorido y diseño largo. con parches',
            'price' => 120000,
            'available' => 7
        ]);
        DB::table('products')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'name' => ' Buso Nike Jordan ',
            'description' => 'Elaborada con algodón y poliéster siendo una prenda suave al tacto y perdurable gracias a esta composición, Cuenta con cuello redondo con terminación acanaladas al igual que la cintura y mangas con acanaladas para un ajuste cómodo, Las mangas son tipo reglan ayudando a maximizar el rango de movimiento, Incorpora Gráficos de la marca estampado en las mangas, Material:Algodón/Poliester.',
            'price' => 65000,
            'available' => 5
        ]);













    }
}
