<?php

namespace App\Http\Controllers;

use App\Models\pessoa;
use App\Models\User;
use App\Models\doador;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DoadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.cadastro_doador');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([ 
            'nome_doador' => 'required|string|min:5|max:40',
            'telefone' => 'required',
            'genero' => 'required|string',
            'pais' => 'required|string',
            'provincia' => 'required|string',
            'municipio' => 'required|string',
            'data_nasc' => 'required|date',
            'tipo_doador' => 'required|string',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        Auth::login($user = User::create([
            'name' => $request->nome_doador,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]));

        $pessoa = pessoa::create([ 
            'usuario_id' => $user->id,
            'nome_pessoa' => $request->get('nome_doador'),
            'genero' => $request->get('genero'), 
            'telefone' => $request->get('telefone'),
            'num_bi' => $request->get('num_bi'),
            'data_nascimento' => $request->get('data_nasc'),
            'pais_id' => $request->get('pais'),
            'provincia_id' => $request->get('provincia'),
            'municipio_id' => $request->get('municipio'),
        ]);

        doador::create([
            'pessoa_id' => $pessoa->id,
            'tipo_doador' => $request->get('tipo_doador') 
        ]);

        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);
        // return redirect("/doador");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
