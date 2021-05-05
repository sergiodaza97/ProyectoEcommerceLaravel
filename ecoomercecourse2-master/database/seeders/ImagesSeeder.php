<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //    Image::factory(50)->create();   
       $faker = Faker::create();
        DB::table('images')->insert([
            'url' => 'https://www.google.com/url?sa=i&url=http%3A%2F%2Fwww.removex.pe%2Fjass.asp%3Fiid%3D269002309%26cid%3D62&psig=AOvVaw0FkWVxuof4lilEJ3b_5GQ9&ust=1620338033809000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCNjQ59nDs_ACFQAAAAAdAAAAABAO',
            'product_id' => 1,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);
        DB::table('images')->insert([
            'url' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Farticulo.mercadolibre.com.co%2FMCO-452496514-conjunto-deportivo-o-sudadera-completa-para-hombre-_JM&psig=AOvVaw1RjmjFOa-RL2UWCW0iP9oB&ust=1620338355274000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCKjV6vLEs_ACFQAAAAAdAAAAABAE',
            'product_id' => 2,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);
        DB::table('images')->insert([
            'url' => 'https://www.google.com/imgres?imgurl=https%3A%2F%2Fhttp2.mlstatic.com%2FD_NQ_NP_698794-MCO43792641678_102020-W.jpg&imgrefurl=https%3A%2F%2Flistado.mercadolibre.com.co%2Fropa%2Fbuso-versace&tbnid=KNLSZzSZ24EUrM&vet=12ahUKEwix5LKUxbPwAhX6eDABHSibDi0QMygaegUIARCFAg..i&docid=HmdTIazW4JgACM&w=568&h=450&q=buso%20versace&ved=2ahUKEwix5LKUxbPwAhX6eDABHSibDi0QMygaegUIARCFAg',
            'product_id' => 3,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);
        DB::table('images')->insert([
            'url' => 'https://www.google.com/imgres?imgurl=https%3A%2F%2Fhttp2.mlstatic.com%2FD_NQ_NP_884003-MCO29577959146_032019-O.jpg&imgrefurl=https%3A%2F%2Farticulo.mercadolibre.com.co%2FMCO-505957491-jean-dsquared2-slim-made-in-italy-_JM&tbnid=nIjDBpiG3OEa6M&vet=12ahUKEwj22fCuxbPwAhU2dzABHdxwBSkQMygDegUIARD2Ag..i&docid=4JH299XbPK_-EM&w=315&h=500&q=jean%20dsquared2&ved=2ahUKEwj22fCuxbPwAhU2dzABHdxwBSkQMygDegUIARD2Ag',
            'product_id' => 4,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);
        DB::table('images')->insert([
            'url' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.tvandinternetbundles.com%2Fchaqueta-versace&psig=AOvVaw3-UwoIv8OK30C74Msx2GDV&ust=1620338516387000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCJD8scfFs_ACFQAAAAAdAAAAABAD',
            'product_id' => 5,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);
        DB::table('images')->insert([
            'url' => 'https://www.google.com/imgres?imgurl=https%3A%2F%2Fi.pinimg.com%2Foriginals%2Fe2%2F52%2F26%2Fe2522665e45e8010405bdcc07d9a25f9.jpg&imgrefurl=http%3A%2F%2Fwww.obralimpa.com%2Fides.asp%3Fiid%3D59791482%26cid%3D63&tbnid=u46MqjGCzpTJMM&vet=12ahUKEwje2o3jxbPwAhXySzABHZ1CCi4QMygQegUIARDmAQ..i&docid=LxBb1KYOQnmRsM&w=662&h=1000&q=buso%20nike%20jordan&ved=2ahUKEwje2o3jxbPwAhXySzABHZ1CCi4QMygQegUIARDmAQ',
            'product_id' => 6,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);
    }
}
