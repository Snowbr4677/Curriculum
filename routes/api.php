<?php

use Illuminate\Support\Facades\Route;

// API removida por não fazer parte do portfólio público dos currículos.
Route::get('/', fn () => response()->json(['retorno' => true]));

