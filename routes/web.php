<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('inicio');
});





Route::get('/inicio', [App\Http\Controllers\InicioController::class, 'pagInicio'])->name('inicio');