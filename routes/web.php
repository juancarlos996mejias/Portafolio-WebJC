<?php
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Route::get('/', function () {
    return redirect()->route('projects.index');
});
*/

Route::get('/', function () { 
    return view('home'); 
});





Route::get('/proyectos', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/proyectos/{slug}', [App\Http\Controllers\ProjectController::class,'show'])->name('projects.show');
Route::get('/sobre-mi', function () { return view('sobre-mi'); });

use App\Http\Controllers\ContactController;

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

// Ruta para procesar el formulario (simulación por ahora)
Route::post('/contacto', [ContactController::class, 'send']);



// Vista que lista todos los proyectos
Route::get('/proyectos', [ProjectController::class, 'index'])
    ->name('proyectos.index');

// Vista de detalle de un proyecto usando slug
Route::get('/proyectos/{slug}', [ProjectController::class, 'show'])
    ->name('proyectos.show');
