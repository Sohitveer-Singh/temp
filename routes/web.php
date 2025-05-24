<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main.home');
})->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        if (auth()->check() && auth()->user()->id === 1) {
            return view('dashboard');
        } else {
            abort(403, 'Unauthorized access.');
        }
    })->name('dashboard');
    Route::get('/user/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user/update', [UserController::class, 'update'])->name('user.update');
    
    Route::get('/addUser', function () {
        return view('profile.add-user');
    })->name('home');
    
    Route::post('/add',[UserController::class,'addProfile'] );
   
    Route::get('/edit/{id}',[UserController::class,'editProfile']);
    Route::put('/editUserProfile/{id}',[UserController::class, 'editUserProfile']);

    Route::get('/delete/{id}', [UserController::class ,'delete']);

});
