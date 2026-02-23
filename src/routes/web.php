<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\BarcoController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     // la vista esta en src\resources\views\welcome.blade.php (solo se pone el nombre sin el blade.php)
//     return view('welcome');
// });


// Route::view('/', 'welcome')->name('welcome');  // esto hace lo mismo que el codigo de arriba route::get

Route::post('/submit', function () {
    return 'Formulario enviado';
});




use App\Models\Employee;

Route::get('/crear-empleado ', function () {
    $note = new Employee();
    $note->emp_id = 1;
    $note->emp_firstname = 'Luis';
    $note->emp_lastname = 'Ferri';
    $note->emp_birth_date = '1990-01-01';
    $note->emp_hire_date = '2020-01-01';
    $note->salary = 5000000;
    $note->save();
    return 'Empleado creado';
});



Route::get('/', [ServicesController::class, 'index'])->name('index');
Route::get('/trayectos', [ServicesController::class, 'trayectos'])->name('trayectos');
Route::get('/barcos', [BarcoController::class, 'barcos'])->name('barcos');
Route::get('/contact', [ServicesController::class, 'contact'])->name('contact');
Route::get('/create', [BarcoController::class, 'create'])->name('barcos.create');
Route::post('/barcos', [BarcoController::class, 'store'])->name('barcos.store');
Route::get('/ecologicos', [BarcoController::class, 'ecologicos'])->name('barcos.ecologicos');
//Route::view('/', 'landing.index')->name('home');
//Route::view('/about', 'landing.about')->name('about');
//Route::view('/services', 'landing.services')->name('services');
//Route::view('/contact', 'landing.contact')->name('contact');

Route::delete('/barcos/{barco}', [BarcoController::class, 'eliminar'])->name('barcos.eliminar');

Route::put('/barcos/{barco}', [BarcoController::class, 'update'])->name('barcos.update');

Route::get('/barcos/{barco}', [BarcoController::class, 'show'])->name('barcos.show');
Route::get('/barcos/{barco}/edit', [BarcoController::class, 'edit'])->name('barcos.edit');
