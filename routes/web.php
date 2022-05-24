<?php

use Illuminate\Support\Facades\Route;

/*      Metodos en las rutas
GET: Conseguir datos
POST: Guardar datos
PUT: Actualizar recursos
DELETE: Eliminar recursos
 */

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/blog', function(){
    return view('bloques.contact');
});