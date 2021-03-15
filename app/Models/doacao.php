<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doacao extends Model
{
    use HasFactory;

    protected $fillable = ['descricao' ,'doador_id', 'instituicao_id', 'data', 'quantidade'];
}
