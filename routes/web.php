<?php

//GET peticiones visibles
//Post peticiones de informacion no visible
//Put actualizar algun registro
//Patch
//Delete eliminar registro

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

//Aqui se llama a las rutas
Route::get('/', [HomeController::class, 'index']);

Route::get('/login/login', [PostController::class, 'login']);

Route::get('/posts/sidebar', [PostController::class, 'sidebar']);

Route::get('/posts/{post}', [PostController::class, 'show']);



// rutas views
Route::get('/views/fichabeneficiario', [PostController::class, 'fichabeneficiario'])->name('fichabeneficiario');
Route::get('/views/formularioBeneficiario', [PostController::class, 'formularioBeneficiario'])->name('formularioBeneficiario');
Route::get('/views/verBeneficiario', [PostController::class, 'verBeneficiario'])->name('verBeneficiario');
Route::get('/views/asistencia', [PostController::class, 'asistencia'])->name('asistencia');
Route::get('/views/registroactividad', [PostController::class, 'registroactividad'])->name('registroactividad');
