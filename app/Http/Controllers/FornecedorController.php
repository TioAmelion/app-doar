<?php

namespace App\Http\Controllers;

use App\Models\pessoa;
use App\Models\User;
use App\Models\fornecedor;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class FornecedorController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nome_doador' => 'required|string|min:5|max:40',
            'telemovel' => 'required|min:9',
            'genero' => 'required',
            'municipio' => 'required|string|max:20',
            'provincia' => 'required|string|min:5|max:20',
            'num_bi' => 'required|string|min:10|max:20',
            'data_nasc' => 'required|date',
            'area_actuacao' => 'required|string|min:5|max:20',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        Auth::login($user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]));

        $pessoa = pessoa::create([ 
            'usuario_id' => $user->id,
            'nome_pessoa' => $request->get('nome_doador'),
            'genero' => $request->get('genero'),
            'telefone' => $request->get('telemovel'),
            'num_bi' => $request->get('num_bi'),
            'data_nascimento' => $request->get('data_nasc'),
            'municipio' => $request->get('municipio'),
            'provincia' => $request->get('provincia'),
            'area_actuacao' => $request->get('area_actuacao')
        ]);

        fornecedor::create([
            'pessoa_id' => $pessoa->id,
            'area_actuacao' => $request->get('area_actuacao') 
        ]);

        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);
        // return redirect("/doador");
    }
}
