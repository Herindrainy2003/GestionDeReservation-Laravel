<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\voituresControllers;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\searchController;
use App\Http\Controllers\dashboardController;


// Routes pour les voitures
Route::resource('voitures', voituresControllers::class);

// Routes pour les places
Route::resource('places', PlaceController::class);

// Routes pour les clients
Route::resource('clients', ClientController::class);

// Routes pour les réservations
Route::resource('reservations', ReservationController::class);

Route::delete('/client/{client}' , ClientController::class .'@delete') ->name('clients.delete');

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);
Route::post('/logout', [Logoutcontroller::class, 'destroy'])
    ->middleware('auth');

Route::get('/searchClient', [SearchController::class, 'searchClient'])->name('search');

Route::get('/reservations/{id}/receipt', [ReservationController::class, 'downloadReceipt'])->name('reservations.receipt');

Route::get('/', [dashboardController::class, 'index'])->name('dashboard');




