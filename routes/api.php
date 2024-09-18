<?php

use App\Http\Controllers\TransportUnitController;
use Illuminate\Support\Facades\Route;

// GET route for fetching transport units
Route::get('/transport-units', [TransportUnitController::class, 'index']);

// POST route for creating a new transport unit
Route::post('/transport-units', [TransportUnitController::class, 'store']);
