<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class PaisController extends Controller
{
    public function getPais()
    {
    	$paises = pais::all()->pluck('id', 'nome_pais'); 
    	return view('auth.register', ['pais' => $paises])
    }
}
