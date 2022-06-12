<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
//Lista todas as Imagens
Route::get('/listagem', [ImageController::class, 'listagem'])->name(name:'list');
//Mostra a imagem especifica
Route::get('/detalhes/{image:slug}', [ImageController::class, 'show'])->name(name:'details');
//Adiciona uma imagem
Route::get('listagem/adicionar', [ImageController::class, 'new'])->name(name:'add');
//Aqui recebe a requisição da rota acima
Route::post('listagem/adicionar', [ImageController::class, 'save'])->name(name:'create');
//Aqui temos a rota para editar uma imagem
Route::get('listagem/{image}/editar', [ImageController::class, 'edit'])->name(name:'edit');
//Aqui a rota recebe a requisão da rota acima
Route::put('listagem/{image}', [ImageController::class, 'update'])->name(name:'update_img');
//Aqui a rota remove a imagem
Route::get('listagem/remove/{image}', [ImageController::class, 'delete'])->name(name:'delete');
