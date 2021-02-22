<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\papei;

class Permissoe extends Model
{
    use HasFactory;
    public function papel()
    {
        return $this->belongsToMany(papei::class);
    }
}
