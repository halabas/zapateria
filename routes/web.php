<?php

use App\Http\Controllers\CarritoController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\ZapatoController;
use App\Models\Carrito;
use App\Models\User;
use App\Models\Zapato;
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



Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('carritos/ver',[CarritoController::class,'ver']);

Route::resource('carritos',CarritoController::class);
Route::resource('zapatos',ZapatoController::class);

Route::resource('facturas',FacturaController::class);

Route::get('/', function(){
    return redirect()-> route('zapatos.index');
});


require __DIR__.'/auth.php';
