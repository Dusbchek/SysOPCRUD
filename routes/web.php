<?php

use App\Http\Controllers\EmployeController;
use Illuminate\Container\Attributes\Auth as AttributesAuth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');




Route::middleware(['auth'])->get('/fyp', function () {
    $user = Auth::user(); 

    if ($user && $user->role === 'admin') {
        return view('fyp', ['user' => $user]); 
    }

    return redirect('/dashboard'); 
});

Route::view('/', 'welcome');

Route::resource('employes', EmployeController::class);


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('employes', EmployeController::class);

});


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


Route::middleware(['auth', 'role:non'])->group(function () {

    Route::view('/fyp', 'fyp');

});



require __DIR__.'/auth.php';
