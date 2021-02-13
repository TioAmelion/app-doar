<?php

namespace App\Http\Controllers;

use App\Models\pessoa;
use App\Models\User;
use Illuminate\Http\Request;

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
        $user = User::create([
            'name' => $request->get('nome'),
            'email' => $request->get('email'),
            'password' => $request->get('senha')
        ]);
        
        pessoa::create([
            'usuario_id' => $user->id,
            'nome_pessoa' => $request->get('nome'),
            'telefone' => $request->get('telemovel'),
            'nif' => $request->get('nif'),
            'data_nascimento' => $request->get('data_nasc'),
            'municipio' => $request->get('municipio'),
            'provincia' => $request->get('provincia'),
        ]);
        return redirect("/doador");
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
