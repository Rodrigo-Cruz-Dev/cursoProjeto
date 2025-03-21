<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'cpf',
        'nome',
        'data_nascimento',
        'protocolo',
        'tel1',
        'tel2',
        'tel3',
        'email',
        'concluido',
        'observacao',
    ];
}