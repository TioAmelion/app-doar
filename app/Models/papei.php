<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Permissoe;

class papei extends Model
{
    use HasFactory;
    public function permissao()
    {
        return $this->belongsToMany(Permissoe::class);
    }


}
