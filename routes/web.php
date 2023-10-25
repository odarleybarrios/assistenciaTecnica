<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
})->name('welcome');

Route::get('/palestras', function () {
   $titulo = 'Palestras';
   //buscar todos os registros da tabela posts
   $postagens = App\Models\Post::all();
   //retorna para a página 'palestras' com as variaveis
    return view('palestras',compact('titulo','postagens'));
})->name('palestras');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/aparelhos', function () {
    $vetor = App\Models\Aparelho::all();
     return view('aparelhos.index',compact('vetor'));
 })->name('aparelhos');

 Route::get('/clientes', function () {
    $vetor = App\Models\Clientes::all();
    return view('clientes.index',compact('vetor'));
 })->name('clientes');

 Route::get('/servicos', function () {
    $vetor = App\Models\Servico::all();
    return view('servicos.index',compact('vetor'));
 })->name('servicos');
