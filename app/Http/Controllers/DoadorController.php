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
        // dd($request->all());

        $request->validate([
            'nome_doador' => 'required|string|min:5|max:40',
            'telemovel' => 'required|min:9|max:14',
            'genero' => 'required',
            'municipio' => 'required|string|max:20',
            'provincia' => 'required|string|min:5|max:20',
            'num_bi' => 'required|string|min:10|max:20',
            'data_nasc' => 'required|date',
            'tipo_doador' => 'required',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        // $user = User::create([
        //     'name' => $request->get('nome'),
        //     'email' => $request->get('email'),
        //     'password' => $request->get('password')
        // ]);

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
            'provincia' => $request->get('provincia')
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
