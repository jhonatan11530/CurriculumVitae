<?php

use App\Models\languajes;
use App\Models\Idiomas;

use App\Http\Resources\ApiCityCountry;
use App\Http\Resources\ApiCountry;
use App\Http\Resources\ApiIdioma;
use App\Http\Resources\ApiLenguaje;
use App\Http\Resources\ApiStatesCountry;

use Illuminate\Support\Facades\Route;

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
Route::get('pais', function () {
    return new ApiCountry(null);
});

Route::get('estado/{id}', function ($id) {
    return new ApiStatesCountry($id);
});

Route::get('ciudad/{id}', function ($id) {
    return new ApiCityCountry($id);
});

Route::get('idioma/', function () {
    return new ApiIdioma(Idiomas::all());
});

Route::get('lenguaje/', function () {
    return new ApiLenguaje(languajes::all());
});
