<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movimentacao extends Model
{
    protected $table = "movimentacao";
    protected $fillable = ['id_conta','id_tipo_movimentacao','valor'];
}
