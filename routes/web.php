<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

/* Inicio comunicado:

Estas rutas eran las manuales pero como hice el resourse ya no las necesito mas 
-------------
 Route::get('posts', function () {
    return view('posts.index');
})->name('posts_listado');

Route::get('posts/{id}', function($id = "Invitado") {
return view('posts.show',compact('id'));
})->where('id', "[0-9]+")->name('posts_ficha'); 
-----------------
Fin comunicado
*/

Route::get('/posts/nuevoPrueba', [PostController::class, 'nuevoPrueba']);
Route::get('/posts/editPrueba/{id}', [PostController::class, 'editPrueba']);

Route::resource('posts', PostController::class)
-> only(['index', 'show', 'create', 'edit', 'destroy','store','update'])
->parameters(['posts' => 'id'])   // renombramos {post} a {id}
->where(['id' => '[0-9]+']);      // validacion


