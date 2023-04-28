<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstadioController;
use App\Http\Controllers\PartidoController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', [EstadioController::class, 'lista'])->name('root');
Route::resource('estadios', EstadioController::class);
Route::resource('partidos', PartidoController::class)->parameters([
    'partidos' => 'partido'
]);

Route::get('/gestor', function () {
    return view('gestor');
})->name('gestor');

Route::get('/estadios/{estadio}/partidos', [PartidoController::class, 'partidosPorEstadio'])->name('estadios.partidos');
