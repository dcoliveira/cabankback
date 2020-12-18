<?php

use Illuminate\Database\Seeder;
use App\Models\Agencia;

class AgenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Agencia::create([
            'num_agencia'=>'2030'
        ]);
    }
}
