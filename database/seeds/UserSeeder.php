<?php

use Faker\Factory;
use Illuminate\Database\Seeder;
use App\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        User::create(
            [
                'nome'=>'Denison Oliveira',
                'cpf'=>'85214785236',
                'password' => \Hash::make(130586)
            ]
        ); 

        User::create(
            [
                'nome'=>'Luciana Bregonci',
                'cpf'=>'96325874120',
                'password' => \Hash::make(131986)
            ]
        ); 

        User::create(
            [
                'nome'=>'Daniel Oliveira',
                'cpf'=>'85224665520',
                'password' => \Hash::make(198605)
            ]
        ); 
       
    }
}
