<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClientController;
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

//Testuojame prisijungima prie duomenu bazes
Route::get('/testConnection', function() {
    return view('testConnection');
});
//@ sena laravel versija iki 6
Route::get('/clients', [ClientController::class,'index']);

//Laravel pagalba susikursime modeli, controller susijusi su klientais
//sukursime specialuji faila(susikures) vadinama migracija, kuriame uzpildysime duomenis apie nauja lentele
//uzpildysime kodo pagal klientu lentele 500 netikru klientu

//Factory(gamykla) - failai skirti kurti dideles apimties duomenimis(ClientFactory.php)
// -------------------
//Migrations - failai skirti kurti naujas lenteles ir stulpelius x
//Seeders - failai skirti uzpildyti lenteles duomenimis