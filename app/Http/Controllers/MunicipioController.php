<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\municipio;

class MunicipioController extends Controller
{
	public function getMunicipio($id)
	{

	    $municipios = municipio::where('provincia_id', $id)->pluck('nome_municipio','id');
	    return json_encode($municipios);
	}
}
