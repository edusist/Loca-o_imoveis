<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;

class Imovel extends Model {

    use FormAccessible;

    protected $fillable = [
        'nome',    
        'telefone',
        'endereco',
        'cidade',
        'estado',
        'valor',
        'condicao'
    ];
    //Regras de validação
    public $rules = [
        'nome' => 'required|max:50',
    ];

}
