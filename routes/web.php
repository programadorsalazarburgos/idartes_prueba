<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController; 

Route::post('productos/registrar',[PacienteController::class, 'store']);
Route::post('historias/registrar',[PacienteController::class, 'historias_store']);
Route::post('historias_evolucion/registrar',[PacienteController::class, 'historias_evolucion_store']);
Route::post('productos/editar',[PacienteController::class, 'editar']);
Route::get('listar_pacientes',[PacienteController::class, 'listar_pacientes']);
Route::get('count_historia',[PacienteController::class, 'count_historia']);
Route::get('get_historia',[PacienteController::class, 'get_historia']);
Route::get('pdf-generate/{paciente}',[PacienteController::class, 'PDFgenerate']);
Route::post('pacientes/registrar',[PacienteController::class, 'registrar_pacientes']);
Route::post('pacientes/eliminar',[PacienteController::class, 'eliminar_paciente']);
Route::post('pacientes/editar',[PacienteController::class, 'editar_paciente']);

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
});