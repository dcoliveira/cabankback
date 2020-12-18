<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movimentacao;

class MovimentacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ultDeposito = Movimentacao::select('valor')
                ->where('id_tipo_movimentacao',2)
                ->orderBy('id', 'desc')
                ->limit(1)
                ->first();

        $ultSaque = Movimentacao::select('valor')
                ->where('id_tipo_movimentacao',1)
                ->orderBy('id', 'desc')
                ->limit(1)
                ->first();

        $historico = Movimentacao::select('tipo_movimentacao.tipo','movimentacao.valor as R$ Valor', 'movimentacao.created_at as Data'  )
                ->join('tipo_movimentacao','movimentacao.id_tipo_movimentacao','=','tipo_movimentacao.id')
                ->orderBy('movimentacao.created_at','asc')
                ->get();

        $saldo = Movimentacao::all();
        $valorsaldo = 0;
        $deposito = 0;
        $saque = 0;


        foreach($saldo as $row){
            if($row['id_tipo_movimentacao'] == 2 ){
                $deposito += $row['valor'];
            }
            if($row['id_tipo_movimentacao'] == 1 ){
                $saque += $row['valor'];
            }
              
         }
         $valorsaldo=$deposito-$saque; 

         return response()->json([
                'ultDeposito' => $ultDeposito,
                'ultSaque' => $ultSaque,
                'valorsaldo' => $valorsaldo, 
                'historico' => $historico,  
         ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movimentacao = Movimentacao::create([
            'id_conta'=>$request->input('id_conta'),
            'id_tipo_movimentacao'=>$request->input('id_tipo_movimentacao'),
            'valor'=>$request->input('valor')
        ]); 
        return response()->json($movimentacao);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Movimentacao $movimentacao){
        return response()->json($movimentacao);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
