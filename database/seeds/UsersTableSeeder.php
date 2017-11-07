<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        
        User::create([
            
            'name' => 'Stevan Ristov',
            
            'email' => "stevanris@gmail.com",
            
            'password' => bcrypt('lucija'),
        
            'admin'   => 1
            
        ]);
    
    }
}
