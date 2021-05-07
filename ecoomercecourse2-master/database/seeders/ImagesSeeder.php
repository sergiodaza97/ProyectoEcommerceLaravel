<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Image::factory(50)->create();

        $faker = Faker::create();
        DB::table('images')->insert([
            'url' => 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcS8CwefDS7LvGsWakr9xQsRd5kdFG-pi1d9Kqt7XnVSsnilDWXq9psYXW-1kLiy1NsF3cbpz_ckKZvJ75ViFbPpTxX69Hq9dXiOTtv5p2LZyW3ey28O16Xx&usqp=CAE',
            'product_id' => 1,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);
        DB::table('images')->insert([
            'url' => 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQ_UoXbkVV8rmbCUK-8lduozu_W_KbBxbCLQJ_MJhlS9LEKa3bf0ERI4aVjUmvOfsLjWmUx2fNMc-_h51luM_zYZH6XPyhMq4zgQfXoqDGAD8Ka8jHwiXpI_Q&usqp=CAE',
            'product_id' => 1,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);
        DB::table('images')->insert([
            'url' => 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcRjQ0_nOlUnjtsui7JuRB3MODjm6jeln7zEvE2Ot5z8GDOn6j3pOcNCfgweivE3Wdh6AeEYHI8SLTo-bA8bY35A4i3R2RrjsqKOnnG1WoXm&usqp=CAE',
            'product_id' => 1,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);
        DB::table('images')->insert([
            'url' => 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcTW7IZudpBmYSpNvniKKKbm-84EtzNMffNjAKgahPWEnS5oMddH2gJZnNJVCDlA3DSM1tnuzCYnOia1SuXy3gbLDCXQlC8BIExmZ7tmfIO83mJDZ2LS_NxLXQ&usqp=CAE',
            'product_id' => 2,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);
        DB::table('images')->insert([
            'url' => 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcSRc2e3ObemQpHyDOVzEx-3x9dNemRWlqxSgnjl0bhsH8X12JryPp1JtEVMtraPF8L72I9GU1kIggZEv9eqeOA5ZUhsf-XvEh8C5LoqaVaR-hOB3rgdOaO5&usqp=CAE',
            'product_id' => 2,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);
        DB::table('images')->insert([
            'url' => 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcS2AC1qnCeqc0wUd4-veWnnDqZPuOgbV6X8kBr_wUDi5helVDomN0bDynqKCDiqY7CBmLT_URE-heQ-m3M-MK16BVISifzRSP0NKSaKqO0BW4GrzJkC8GnK&usqp=CAE',
            'product_id' => 2,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);
        DB::table('images')->insert([
            'url' => 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcR3x5St7ilner-IDfF08euwxNDnRy643VDdpvzl3EoDn3_pDprE2UT5AzdQGAzMSfk3oON0LP831jdCjqkgsxk5vu0_NZ0rYXREgDvVlp-oHTMYlsB_WNOMdg&usqp=CAE',
            'product_id' => 3,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);
        DB::table('images')->insert([
            'url' => 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcRz8yg21m_NumVPKGiTZ_7w7su4VP-Rv5AmS6RqabgTU-1UoDak2vZIWi2Qw647D8mSng6J8Qf7_vCC6NeVAQONwXfgwbmgMxZZn5xUNhI&usqp=CAE',
            'product_id' => 3,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);
        DB::table('images')->insert([
            'url' => 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcRrr5gOz7KRFld9awct1wFLezcHIcyKrJMrE4re3a-lWK27-IgBrFAKxJ0_Kk-GhPLpduW3JAaN3XOyUS8dNAEmx9zrZ6DSEHA60HgIQsh1Eix5AAWTE56Btg&usqp=CAE',
            'product_id' => 3,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);
        DB::table('images')->insert([
            'url' => 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcR9hj34KtO4ZH7ercrEuZZrZ0Sd1snDBSIUrkiMRpG7zffvJUhnwjLhDrUlW7feU3vLlsvxpOCqnoF8QrrwNYaOt2dXNTOgthzoclM8KiuymR8JHSXe9oE4&usqp=CAE',
            'product_id' => 4,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);
        DB::table('images')->insert([
            'url' => 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQFVHUWFJA9HjjYhwt8XFryE6rOewuBksYWxX7Lpwk5JtsYx-cjuwV69aH5qoq8nMhKp8q-93QwxW6VlS6Z8CalUi14qH3DCrBNJXbqlFkhqpeIqhmcxBs&usqp=CAE',
            'product_id' => 4,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);
        DB::table('images')->insert([
            'url' => 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcRrL5aEruYTTSOQhP_E5avc3_kyMu18WxHlfA3Mk-BOxIbmcKjkHo-6g3c_PkB2oSQkZwQuntMWiGT50H_U1SfPPod9ZyCsXNHVNPZcHI8e&usqp=CAE',
            'product_id' => 4,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);
        DB::table('images')->insert([
            'url' => 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcRFTHxT-n7qQ1F-HN4_3YnqR4YMDg5egB5YNHrAT9A2nSUKYur0ftPVsDWzj3mFwSKZImYqdmuHUaXgRJBXc3uAxcK5isF5VrwyLRe95lyoWmmBnrDlheWP&usqp=CAE',
            'product_id' => 5,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);
        DB::table('images')->insert([
            'url' => 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcTW74Niezmm0aqDjvmIi7muGiH5zLTKNS38Hx-gbH6IQzncqC9i__imfbGueo-58w5Rdn5Ru8XRysHq6iWsB4mB-YCw2HpjVwoSTiyJYUk&usqp=CAE',
            'product_id' => 5,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);
        DB::table('images')->insert([
            'url' => 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQhEkVvqhTf3iORb5uqx81BaOP3A6tVaIBasRD8bsTCH83j9leVygmzVOVOE2OCp4qeTc0GdYc8b_-WQom0avAugaQPpYp9wpbt7ClE9scJ&usqp=CAE',
            'product_id' => 5,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);
        DB::table('images')->insert([
            'url' => 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcR25lJhlKPCSvsEjN0jEJcgNVZXvTNGhI4U9RyOBKlvoSQ_VUVTJ6ia1qOSLtGwTu_a8zGDt2zQVt7_IlK00g9d-JCUogpZ7UyzHXm0_J4qtJNsUnRI6sYYsIY&usqp=CAE',
            'product_id' => 6,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);
        DB::table('images')->insert([
            'url' => 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSaoGe2bvVBRwlByStlhBLjx9uKP4BOrHq_YQugwQj_kKiTl9coFSNo87adHSi-elCXe7iAiNzeMHBBjW7CWN1L0Tjs-HgnMykipjNeE1zjtqZx_3jSOU04GGA&usqp=CAEhttps://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSaoGe2bvVBRwlByStlhBLjx9uKP4BOrHq_YQugwQj_kKiTl9coFSNo87adHSi-elCXe7iAiNzeMHBBjW7CWN1L0Tjs-HgnMykipjNeE1zjtqZx_3jSOU04GGA&usqp=CAE',
            'product_id' => 6,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);
        DB::table('images')->insert([
            'url' => 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcRxhtC48UdxSVJEz1CY9ILukfU384_9bXWhAToJ1KVlM0sxcvc_YCzQgpiQWd5sID01AK_gA6Klh5uCSPn8x4Xa3dHWkt247zab9o9aHquVQ6Wc0uUiIVJ0EA&usqp=CAE',
            'product_id' => 6,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);
    }
}