<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fornecedor extends Model
{
    use HasFactory;

    protected $guardad = [ 'id' ];

    protected $fillable = ['pessoa_id', 'area_actuacao'];
}
