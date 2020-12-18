<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Utilits\Utilits;


class TransferenciaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'agencia' => $this->id_agencia,
            'conta'  => $this->id_conta,
            'valor' => Utilits::moedaBrasil($this->valor),
            'dataHora' => date('d/m/Y H:i'),
        ];
    }
}
