<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Models\User;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\PublicacaoController;
use App\Http\Controllers\DoacaoController;
use App\Models\publicacao;
use App\Models\instituicao;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $sectionLeft = 'admin.includes.sectionLeft';
    $pagina = 'admin.includes.feedSite';
    $pub = DB::table('publicacaos')
    ->join('users','publicacaos.usuario_id', '=','users.id')
    ->select('users.name','publicacaos.*')->get();
    return view('welcome',['sectionLeft' => $sectionLeft,'corpo' => $pagina])->with('pub',$pub);
});

Route::get('/instituicoes',function(){
    $dados = DB::table('instituicaos')->select('nome_instituicao')->get();
    $pagina = 'admin.includes.all_instituicoes';
    return view('welcome',['corpo' => $pagina])->with('dados',$dados);
});

Route::get('/index', function () {
    return view('admin/layout');
});

Route::get('/perfil', function () {
    return view('auth/profile');
});

Route::get('/ajax-toastr', function () {
    return view('toastr');
})->middleware(['auth']);

Route::resource('doacao', 'App\Http\Controllers\DoacaoController')->middleware(['auth']);

Route::get('/logout', 'App\Http\Controllers\Auth\AuthenticatedSessionController@destroy');

Route::resource('doador', 'App\Http\Controllers\DoadorController');

Route::resource('publicar', 'App\Http\Controllers\PublicacaoController')->middleware(['auth']);

Route::get('municipio/{id}', [MunicipioController::class, 'getMunicipio']);

Route::get('provincia/{id}', [ProvinciaController::class, 'getProvincia']);

Route::resource('instituicao', 'App\Http\Controllers\InstituicaoController');

Route::resource('fornecedor', 'App\Http\Controllers\FornecedorController');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
