<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $productos = [
        ['nombre' => 'producto 1', 'precio' => 100],
        ['nombre' => 'producto 2', 'precio' => 200],
        ['nombre' => 'producto 3', 'precio' => 100],
        ['nombre' => 'producto 4', 'precio' => 900],
        ['nombre' => 'producto 5', 'precio' => 700],
    ];
    $nombre = "Juan Carlos";
    return view('welcome', ['productos' => $productos],['nombre' => $nombre]);
});
