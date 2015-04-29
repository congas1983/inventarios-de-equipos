<?php
Use Iluminate\Database\Seeder;

class UserTableSeeder Extends Seeder{
    
    public function run(){
        
        \DB::table('users')->insert(array(
        'name'=>'Marcos',
         'emai'=>'andrescongas@gmail.com'
         'password'=>\hash::make('laal312287'))
        
        ))
    }
    
    
}