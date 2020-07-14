<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;

class Aluguel extends Model {

    use FormAccessible;

    protected $fillable = [
        'id',
        'proprietario_id',
        'corretor_id',
        'inquilino_id',
        'imovel_id'
    ];
    //Regras de validação
    public $rules = [
    ];

}
