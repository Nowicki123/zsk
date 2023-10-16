<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ShowController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



Route::prefix('admin')->group(function(){
    Route::get('/users', function(){
        return '<h3> Użytkownicy </h3>';
    });
    
    Route::get('/home', function(){
        return '<h3> Strona Domowa </h3>';
    });
    
});


Route::prefix('user')->group(function(){
    Route::get('/users', function(){
        return '<h3> Użytkownicy </h3>';
    });
    
    Route::get('/home', function(){
        return '<h3> Strona Domowa </h3>';
    });
    
});


Route::redirect('/admin', '/admin/home');

Route::get('show', [ShowController::class, 'show']);