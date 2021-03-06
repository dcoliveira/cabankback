<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\AgenciaResource;
use App\Http\Resources\UsuarioResource;

class ContaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $return =  [
            'numero' => $this->num_conta,
            'agencia' => new AgenciaResource($this->id_agencia),
            'usuario' => new UsuarioResource($this->id_user),
            'created_at' => $this->created_at->format('d/m/Y H:i'),
            'updated_at' => $this->updated_at->format('d/m/Y H:i')
        ];

        if ($this->token) {
            $return['token'] = \Hash::make($this->id);
        }
        return $return;
    }
}
