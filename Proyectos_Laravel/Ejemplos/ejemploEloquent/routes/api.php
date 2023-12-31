<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\miControlador;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('verpersonas',[miControlador::class, 'verPersonas']);
Route::get('probarFind',[miControlador::class, 'probarFind']);
Route::get('buscarpersona/{dni}',[miControlador::class, 'buscarPersona']);
Route::get('vermayores',[miControlador::class, 'vermayores']);
Route::post('insertarPersonas',[miControlador::class, 'insertarPersonas']);


