<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\instituicao;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class InstituicaoController extends Controller
{
     public function store(Request $request)
     {

        $request->validate([
            'nome_instituicao' => 'required|string|min:5|max:40',
            'sigla' => 'required|string|min:2|max:14',
            'direitor' => 'required|string|min:3|max:40',
            'telemovelI' => 'required|min:9',
            'municipioI' => 'required|string|max:20',
            'provinciaI' => 'required|string|min:5|max:20',
            'objectivo' => 'required|string|min:10|max:100',
            'nif' => 'required||string',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        Auth::login($user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]));

        $instituicao = instituicao::create([ 
            'usuario_id' => $user->id,
            'nome_instituicao' => $request->get('nome_instituicao'),
            'sigla' => $request->get('sigla'),
            'telefone' => $request->get('telemovelI'),
            'direitor' => $request->get('direitor'),
            'objectivo' => $request->get('objectivo'),
            'municipio' => $request->get('municipioI'), 
            'provincia' => $request->get('provinciaI'),
            'nif' => $request->get('nif')
        ]);

        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);
        // return redirect("/doador");
    }
}
