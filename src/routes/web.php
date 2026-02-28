<?php

use App\Http\Controllers\ServicesController;
use App\Http\Controllers\BarcoController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     // la vista esta en src\resources\views\welcome.blade.php (solo se pone el nombre sin el blade.php)
//     return view('welcome');
// });


// Route::view('/', 'welcome')->name('welcome');  // esto hace lo mismo que el codigo de arriba route::get

// Define las rutas de recurso para 'barcos'.
// Por defecto, esto mapea:
// GET /barcos          -> BarcoController@index
// GET /barcos/create   -> BarcoController@create
// POST /barcos         -> BarcoController@store
// GET /barcos/{barco}  -> BarcoController@show
// GET /barcos/{barco}/edit -> BarcoController@edit
// PUT/PATCH /barcos/{barco} -> BarcoController@update
// DELETE /barcos/{barco} -> BarcoController@destroy
// Route::resource('barcos', BarcoController::class);



Route::post('/submit', function () {
    return 'Formulario enviado';
});


Route::get('/', [ServicesController::class, 'index'])->name('index');
Route::get('/trayectos', [ServicesController::class, 'trayectos'])->name('trayectos');
Route::get('/barcos', [BarcoController::class, 'barcos'])->name('barcos');
Route::get('/contact', [ServicesController::class, 'contact'])->name('contact');
Route::get('/create', [BarcoController::class, 'create'])->name('barcos.create');
Route::get('/barcos/{barco}', [BarcoController::class, 'show'])->name('barcos.show');
Route::get('/barcos/{barco}/edit', [BarcoController::class, 'edit'])->name('barcos.edit');
Route::get('/ecologicos', [BarcoController::class, 'ecologicos'])->name('barcos.ecologicos');

Route::post('/barcos', [BarcoController::class, 'store'])->name('barcos.store');

Route::delete('/barcos/{barco}', [BarcoController::class, 'eliminar'])->name('barcos.eliminar');

Route::put('/barcos/{barco}', [BarcoController::class, 'update'])->name('barcos.update');
