<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;

//RUTA PÚBLICA

Route::get('/', function () {
    return view('welcome');
});

//DASHBOARD (requiere login)

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//RUTAS PARA USUARIOS AUTENTICADOS

Route::middleware(['auth'])->group(function () {

    //PERFIL
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //CITAS (USUARIOS)
    Route::get('/mis-citas', [AppointmentController::class, 'index'])->name('appointments.index');
    Route::get('/reservar-cita', [AppointmentController::class, 'create'])->name('appointments.create');
    Route::post('/reservar-cita', [AppointmentController::class, 'store'])->name('appointments.store');

    //CATÁLOGO (USUARIOS)
    Route::get('/catalogo', [ServiceController::class, 'catalogo'])
        ->name('catalogo');
});

//RUTAS SOLO PARA ADMIN
Route::middleware(['auth', 'admin'])->group(function () {

    //PANEL ADMIN
    Route::get('/admin', function () {
        return "Panel de administrador";
    })->name('admin.dashboard');

    //SERVICIOS (CRUD)
    Route::resource('services', ServiceController::class);

    //USUARIOS (CRUD)
    Route::resource('users', UserController::class);
});

require __DIR__ . '/auth.php';