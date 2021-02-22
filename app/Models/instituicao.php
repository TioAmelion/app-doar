<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class instituicao extends Model
{
    use HasFactory;

    protected $guardad = [ 'id' ];

    protected $fillable = [
    	'usuario_id', 'nome_instituicao', 'sigla', 'direitor', 'telefone', 'provincia', 'municipio', 'objectivo', 'nif'
    	];
}
