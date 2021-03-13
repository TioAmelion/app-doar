<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class PaisController extends Controller
{
    public function getPais()
    {
    	$paises = pais::all()->puck('id', 'nome_pais'); 
    	return view('auth.register', ['pais' => $paises]);
    }
}
