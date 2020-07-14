<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;

class Corretor extends Model {
    use FormAccessible;

    protected $fillable = [
    'nome',
    'cnpj_cpf',
    'email',
    'telefone',
    'endereco',
    'cidade',
    'estado'
    ];

    //Regras de validação
    public $rules = [
    'nome' => 'required|max:50',

    ];
}
