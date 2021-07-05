<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\libreriaController;
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

Route::get('/', [libreriaController::class, 'home'])
    ->middleware('mostrarfecha');

Route::get('/catalog', [libreriaController::class, 'catalog'])
    ->name('catalog')
    ->middleware('mostrarfecha');

Route::get('/catalog/show/{id}', [libreriaController::class, 'show'])
    ->name('catalog.show')
    ->middleware('mostrarfecha');

//CREATE
Route::get('/catalog/create', [libreriaController::class, 'create'])
    ->name('catalog.create')
    ->middleware('mostrarfecha');
    
Route::post('/catalog/create', [libreriaController::class, 'createStore'])
    ->name('catalog.createStore')
    ->middleware('mostrarfecha');

//EDIT
Route::get('/catalog/edit/{id}', [libreriaController::class, 'edit'])
    ->name('catalog.edit')
    ->middleware('mostrarfecha');

Route::put('/catalog/edit/{id}', [libreriaController::class, 'editStore'])
    ->name('catalog.editStore')
    ->middleware('mostrarfecha');

//DELETE
Route::delete('/catalog/delete/{id}', [libreriaController::class, 'destroy'])
    ->name('catalog.destroy')
    ->middleware('mostrarfecha');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
