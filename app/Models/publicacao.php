<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publicacao extends Model
{
    use HasFactory;

    protected $guardad = ['id'];
    protected $fillable = ['usuario_id', 'titulo','classificacao','texto'];

    public function show(){
        $pub = DB::table('publicacaos')
        ->join('users','publicacaos.usuario_id', '=','users.id')
        ->select('users.name','publicacaos.*')->get();

        return $pub;
    }
}
