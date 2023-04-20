<?php

use App\Http\Controllers\ExportController;
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
});

Route::resource('CurriculumVitae', CurriculumVitaeController::class);
Route::resource('SoporteEstudio', AddSoportesEstudiosController::class);
Route::resource('SoporteEstudioComplemento', AddSoporteEstudioCompleController::class);

Route::get('pdf/show/{id}', [ExportController::class, 'ShowPdf'])->name('hoja.vida.show.pdf');
Route::get('pdf/export/', [ExportController::class, 'PdfExport'])->name('hoja.vida.pdf.export');

