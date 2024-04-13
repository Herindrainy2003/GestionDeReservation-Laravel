<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\voituresControllers;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\ReservationController;
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

// Routes pour les voitures
Route::resource('voitures', voituresControllers::class);

// Routes pour les places
Route::resource('places', PlaceController::class);

// Routes pour les clients
Route::resource('clients', ClientController::class);

// Routes pour les réservations
Route::resource('reservations', ReservationController::class);

Route::delete('/client/{client}' , ClientController::class .'@delete') ->name('clients.delete');
