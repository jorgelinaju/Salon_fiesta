<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Ruta para la página principal (home)
Route::get('/', function () {
    return view('home');
})->name('home');

// Ruta para salones disponibles, con validación de zona
Route::get('/salones/{zona?}', function ($zona = 'Ituzaingo') {
    return view('salones_disponibles', ['zona' => $zona]);
})->where('zona', '[a-zA-Z]+')->name('salones_disponibles');

// Ruta para contacto, con validación de número
Route::get('/contacto/{numero?}', function ($numero = null) {
    return view('contacto', ['numero' => $numero]);
})->where('numero', '[0-9]+')->name('contacto');

// Ruta para almacenar los datos del formulario de contacto
Route::post('/contacto/store', function (Request $request) {
    $request->validate([
        'numero' => 'required|numeric',
        'correo' => 'required|email', // Validación para el correo
    ]);

    

    return redirect()->route('contacto')->with('success', 'Número recibido correctamente.');
})->name('contacto.store');
