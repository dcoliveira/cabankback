<?php

use Illuminate\Database\Seeder;
use App\Models\TipoMovimentacao;


class TiposMovimentacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoMovimentacao::create([
            'tipo'=>'saque',
        ]);
        TipoMovimentacao::create([
            'tipo'=>'depósito',
        ]);

    }
}
