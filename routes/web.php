<?php

use App\Http\Controllers\AgendamentoController;
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
    return view('home');
});

Route::get('/produtos', function () {
    return view('produtos');
});


Route::get('/admin', function (){
    return view('admin');
});

Route::get('/adminprodutos', function (){
    return view('adminprodutos');
});

Route::get('/adminagenda', function (){
    return view('adminagenda');
});

Route::get('/adminvalores', function (){
    return view('adminvalores');
});

Route::post('/agendamento', [AgendamentoController::class, 'store']);
Route::put('/salvarconfig', [AgendamentoController::class, 'storeconfig']);
Route::get('/admindefinicoes', [AgendamentoController::class, 'buscadef']);


// Route::get('/admindefinicoes', function (){
// return view('admindefinicoes');
// });