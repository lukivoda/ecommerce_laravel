<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //parametri na factory se imeto na modelot  i brojot na koloni  vo tabelata za proizvodstvo
        factory(\App\Product::class,30)->create();
        
        
        
//        Product::create([
//
//            'name' => 'Pride and Prejudice and Zombies',
//
//            'price' => "400",
//
//            'image' => 'uploads/images/1.png',
//
//            'description'   => " Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."
//
//        ]);
//
//
//        Product::create([
//
//            'name' => 'The Curious Incident of the Dog in the Night-Time',
//
//            'price' => "300",
//
//            'image' => 'uploads/images/1.png',
//
//            'description'   => "It has survived not only five centuries, but also the leap into electronic typesetting"
//
//        ]);
//
//        Product::create([
//
//            'name' => 'The Hollow Chocolate Bunnies of the Apocalypse',
//
//            'price' => "600",
//
//            'image' => 'uploads/images/1.png',
//
//            'description'   => "It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages"
//
//        ]);
//
//
//        Product::create([
//
//            'name' => 'Midnight in the Garden of Good and Evil ',
//
//            'price' => "700",
//
//            'image' => 'uploads/images/1.png',
//
//            'description'   => "The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using"
//
//        ]);
//
//
//        Product::create([
//
//            'name' => 'The Perks of Being a Wallflower ',
//
//            'price' => "800",
//
//            'image' => 'uploads/images/1.png',
//
//            'description'   => "It has a more-or-less normal distribution of letters, as opposed to using"
//
//        ]);
//
//
//        Product::create([
//
//            'name' => 'The Man Without Qualities ',
//
//            'price' => "800",
//
//            'image' => 'uploads/images/1.png',
//
//            'description'   => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour"
//
//        ]);
//
//
//        Product::create([
//
//            'name' => 'The Earth, My Butt, and Other Big Round Things',
//
//            'price' => "800",
//
//            'image' => 'uploads/images/1.png',
//
//            'description'   => "Majority have suffered alteration in some form, by injected humour"
//
//        ]);


    }
}
