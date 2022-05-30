<?php

use App\Http\Controllers\AutoController;
use App\Http\Controllers\AutomovilController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModeloController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\PersonalController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return View('home');
})->name('home');
*/
// ROUTE PARA PRESENTAR UNA VISTA UTILIZANDO EL MÉTODO VIEW Y EL MÉTODO NAME
//Route::view('nosotros','nosotros')->name('about');
// ROUTE PARA PRESENTAR UNA VISTA UTILIZANDO EL MÉTODO VIEW Y EL MÉTODO NAME
//Route::view('personal','personal')->name('personal');
Route::get('modelos', ModeloController::class)->name('models');
// PASAR PARAMETROS A LA ROUTE
Route::get('contactos/{name?}', [ContactoController::class, 'dataContact'])->name('contact');
Route::get('personal', PersonalController::class)->name('personal');
//Route::resource('autos', AutoController::class)->except('index', 'show');
Route::get('autos','App\Http\Controllers\AutoController@index')->name('indexauto');
//oute::get('home', HomeController::class)->name('home');
Route::get('/',HomeController::class)->name('home');
Route::get('nosotros',NosotrosController::class)->name('about');
Route::get('automovil', AutomovilController::class)->name('automovil');
