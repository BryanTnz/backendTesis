<?php

// Ruta pública para el manejo de inicio de sesión del usuario

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\PasswordController;

Route::post('/login', [AuthController::class, 'login'])->name('login');



// Ruta pública para el manejo del olvido de contraseña del usuario
Route::post('/forgot-password', [PasswordController::class, 'resendLink'])->name('password.resend-link');

// Ruta pública para el manejo del reseteo de la contraseña del usuario
Route::post('/reset-password', [PasswordController::class, 'restore'])->name('password.restore');

// Ruta pública para la redirección del formulario y actualizar los datos
Route::get('/reset-password/{token}', [PasswordController::class, 'redirectReset'])->name('password.reset');





// Grupo de rutas protegidas
Route::middleware(['auth:sanctum'])->group(function ()
{
    // Ruta para el cierre de sesión
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});


