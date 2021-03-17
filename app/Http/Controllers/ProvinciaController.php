<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\provincia;

class ProvinciaController extends Controller
{
    public function getProvincia($id)
	{
		
	    $municipios = provincia::where('pais_id', $id)->pluck('nome_provincia','id');
	    return json_encode($municipios);
	}
}
