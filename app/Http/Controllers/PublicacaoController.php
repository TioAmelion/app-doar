<?php

namespace App\Http\Controllers;

use App\Models\publicacao;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;

class PublicacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'titulo'       => 'required|max:255',
            'classificacao' => 'required',
            'descricao' => 'required'
          ]);
    
          $post = publicacao::create([
                    'usuario_id' => Auth::user()->id,
                    'titulo' => $request->titulo,
                    'classificacao' => $request->classificacao,
                    'texto' => $request->descricao
                  ]);
    
          return response()->json(['message'=>'Post Created successfully','data' => $post]);
    
      }
    //     $request->validate([
    //         'titulo' => 'required',
    //         'classificacao' => 'required'
    //     ]);

    //     $dados = publicacao::create([
    //         'usuario_id' => Auth::user()->id,
    //         'titulo' => $request->get('titulo'),
    //         'classificacao' => $request->get('classificacao'),
    //         'texto' => $request->get('texto')
    //     ]);
        
    //     return Response()->json(['dados' => $dados, 'mensagem' => 'Publicação Concluída com Sucesso']);
    //     // return redirect(RouteServiceProvider::HOME);
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pub = publicacao::all();
        return view('welcome')->with('pub',$pub);
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
