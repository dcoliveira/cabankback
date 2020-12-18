<?php

use Illuminate\Database\Seeder;
use App\Models\Conta;

class ContaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Conta::create([
            'id_user'=>'1',
            'id_agencia'=>'1',
            'num_conta'=>'29800'
        ]);
        Conta::create([
            'id_user'=>'2',
            'id_agencia'=>'1',
            'num_conta'=>'29801'
        ]);
        Conta::create([
            'id_user'=>'3',
            'id_agencia'=>'1',
            'num_conta'=>'29802'
        ]);
    }
}
