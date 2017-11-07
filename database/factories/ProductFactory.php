<?php

use App\Product;
use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(Product::class, function (Faker $faker) {
    
    //Vo UsersTableSeeder pisuvame kolku koloni sakame da ni ispecatat vo tabelata
    
    return [
        //recenica od 3 zbora
        'name' => $faker->sentence(3),

        'image' => 'uploads/images/1.png',

        //pargraph od 4 recenici
        'description'  =>$faker->paragraph(4),
        
        //broj pomedju 100 i 1000
        'price'  => $faker->numberBetween(100,1000)
        
    ];
});
